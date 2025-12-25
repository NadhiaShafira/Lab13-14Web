<?php
$db = new Database();

// --- 1. LOGIKA PENCARIAN (Sesuai Praktikum 14 Halaman 2) ---
$q = "";
$where = "";

// Cek apakah tombol submit ditekan dan input q tidak kosong
if (isset($_GET['submit']) && !empty($_GET['q'])) {
    $q = $_GET['q'];
    $where = " WHERE judul LIKE '%{$q}%' ";
} elseif (!empty($_GET['q'])) { 
    // Ini tambahan agar saat pindah halaman (pagination), filter q tetap jalan
    $q = $_GET['q'];
    $where = " WHERE judul LIKE '%{$q}%' ";
}

// --- 2. LOGIKA PAGINATION ---
$per_page = 2; 

// Hitung total data dengan filter WHERE
$sql_count = "SELECT COUNT(*) FROM artikel" . $where;
$result_count = $db->query($sql_count);
$r_data = $result_count->fetch_row();
$count = $r_data[0]; 

$num_page = ceil($count / $per_page); 
$page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
if ($page < 1) $page = 1;
$offset = ($page - 1) * $per_page;

// Query utama dengan filter dan limit
$sql_data = "SELECT * FROM artikel" . $where . " LIMIT {$offset}, {$per_page}";
$query = $db->query($sql_data);
?>

<h3>🍜 Data Artikel</h3>

<div class="card">
    
    <a href="/lab11_php_oop/artikel/tambah" class="action-link" style="display:inline-block; margin-bottom:15px;">
        ➕ Tambah Artikel
    </a>

    <form action="" method="get" style="margin-bottom: 20px;">
        <label for="q">Cari data: </label>
        <input type="text" id="q" name="q" class="input-q" value="<?= htmlspecialchars($q); ?>" placeholder="Masukkan judul...">
        <input type="submit" name="submit" value="Cari" class="btn btn-primary">
    </form>

    <table border="1" width="100%" style="border-collapse: collapse;">
        <thead>
            <tr>
                <th>No</th>
                <th>Judul</th>
                <th>Isi</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php 
            if ($count > 0) :
                $no = $offset + 1;
                while ($row = $query->fetch_assoc()) : 
            ?>
                <tr>
                    <td style="text-align:center;"><?= $no++; ?></td>
                    <td><?= $row['judul']; ?></td>
                    <td><?= $row['isi']; ?></td>
                    <td style="text-align:center;">
                        <a href="/lab11_php_oop/artikel/ubah?id=<?= $row['id']; ?>" class="action-link">✏️ Ubah</a>
                        <a href="/lab11_php_oop/artikel/hapus?id=<?= $row['id']; ?>" class="action-link" onclick="return confirm('Yakin hapus?')">🗑️ Hapus</a>
                    </td>
                </tr>
            <?php 
                endwhile; 
            else : ?>
                <tr><td colspan="4" style="text-align:center;">Data tidak ditemukan.</td></tr>
            <?php endif; ?>
        </tbody>
    </table>

    <style>
        .pagination { margin-top: 20px; list-style: none; display: flex; padding: 0; }
        .pagination li { margin-right: 5px; }
        .pagination li a { padding: 8px 12px; border: 1px solid #ddd; text-decoration: none; color: #337ab7; border-radius: 4px; }
        .pagination li a.active { background-color: #337ab7; color: white; border-color: #337ab7; }
    </style>

    <ul class="pagination">
        <?php 
            $prev_page = ($page > 1) ? $page - 1 : 1;
            $query_prev = http_build_query(['page' => $prev_page, 'q' => $q]);
        ?>
        <li><a href="?<?= $query_prev; ?>">&laquo; Previous</a></li>
        
        <?php for ($i = 1; $i <= $num_page; $i++) : 
            $query_num = http_build_query(['page' => $i, 'q' => $q]);
        ?>
            <li>
                <a href="?<?= $query_num; ?>" class="<?= ($page == $i) ? 'active' : ''; ?>">
                    <?= $i; ?>
                </a>
            </li>
        <?php endfor; ?>
        
        <?php 
            $next_page = ($page < $num_page) ? $page + 1 : $num_page;
            $query_next = http_build_query(['page' => $next_page, 'q' => $q]);
        ?>
        <li><a href="?<?= $query_next; ?>">Next &raquo;</a></li>
    </ul>
</div>