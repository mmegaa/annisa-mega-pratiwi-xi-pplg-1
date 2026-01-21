<?php
require_once 'config.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nama = mysqli_real_escape_string($conn, $_POST['nama']);
    $kategori = mysqli_real_escape_string($conn, $_POST['kategori']);
    $deskripsi = mysqli_real_escape_string($conn, $_POST['deskripsi']);
    $kandungan = mysqli_real_escape_string($conn, $_POST['kandungan']);
    $harga = (int)$_POST['harga'];
    $stok = (int)$_POST['stok'];
    
    $query = "INSERT INTO produk (nama, kategori, deskripsi, kandungan, harga, stok) 
              VALUES ('$nama', '$kategori', '$deskripsi', '$kandungan', $harga, $stok)";
    
    if (mysqli_query($conn, $query)) {
        header('Location: produk.php?success=1');
        exit();
    } else {
        $error = "Error: " . mysqli_error($conn);
    }
}

include 'header.php';
?>

<div class="container">
    <div class="header">
        <h1 class="brand-title">ANNIÉ SKIN</h1>
        <p class="tagline">Gentle Care, Glass Skin</p>
        <div class="navbar">
            <ul class="nav-menu">
                <li><a href="index.php">🏠 Beranda</a></li>
                <li><a href="produk.php">🧴 Produk</a></li>
                <li><a href="tambah.php" class="active">➕ Tambah Produk</a></li>
                <li><a href="about.php">🌸 Tentang</a></li>
            </ul>
        </div>
    </div>

    <div class="card">
        <h2 style="color: #D4A5B5; margin-bottom: 25px;">Tambah Produk Baru</h2>
        
        <?php if (isset($error)): ?>
        <div style="background: #FFE8E8; color: #D44; padding: 15px; border-radius: 10px; margin-bottom: 20px;">
            <?php echo $error; ?>
        </div>
        <?php endif; ?>
        
        <form method="POST" action="">
            <div class="form-group">
                <label class="form-label">Nama Produk</label>
                <input type="text" class="form-control" name="nama" required 
                       placeholder="Contoh: Annié Glass Skin Serum">
            </div>
            
            <div class="form-group">
                <label class="form-label">Kategori</label>
                <select class="form-control" name="kategori" required>
                    <option value="Skincare">Skincare</option>
                    <option value="Makeup">Makeup</option>
                    <option value="Bodycare">Bodycare</option>
                </select>
            </div>
            
            <div class="form-group">
                <label class="form-label">Deskripsi Produk</label>
                <textarea class="form-control" name="deskripsi" rows="3" required
                          placeholder="Deskripsi lengkap produk..."></textarea>
            </div>
            
            <div class="form-group">
                <label class="form-label">Kandungan Utama</label>
                <textarea class="form-control" name="kandungan" rows="2"
                          placeholder="Contoh: Centella Asiatica, Hyaluronic Acid, Niacinamide"></textarea>
            </div>
            
            <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 20px;">
                <div class="form-group">
                    <label class="form-label">Harga (Rp)</label>
                    <input type="number" class="form-control" name="harga" min="0" required>
                </div>
                
                <div class="form-group">
                    <label class="form-label">Stok</label>
                    <input type="number" class="form-control" name="stok" min="0" required>
                </div>
            </div>
            
            <div style="display: flex; gap: 15px; margin-top: 30px;">
                <button type="submit" class="btn btn-primary">Simpan Produk</button>
                <a href="produk.php" class="btn btn-secondary">Batal</a>
            </div>
        </form>
    </div>
</div>

<?php include 'footer.php'; ?>