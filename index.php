<?php
require_once 'config.php';
include 'header.php';
?>

<div class="container">
    <div class="header">
        <h1 class="brand-title">ANNIÉ SKIN</h1>
        <p class="tagline">Gentle Care, Glass Skin</p>
        <div class="navbar">
            <ul class="nav-menu">
                <li><a href="index.php" class="active">🏠 Beranda</a></li>
                <li><a href="produk.php">🧴 Produk</a></li>
                <li><a href="tambah.php">➕ Tambah Produk</a></li>
                <li><a href="about.php">🌸 Tentang</a></li>
            </ul>
        </div>
    </div>

    <div class="card">
        <h2 style="color: #D4A5B5; margin-bottom: 15px;">Selamat Datang di ANNIÉ SKIN</h2>
        <p>Brand skincare terinspirasi dari perawatan kulit Korea yang menekankan kelembutan, hidrasi, dan kilau alami kulit. Diformulasikan untuk pemakaian harian, membantu menciptakan kulit sehat, tenang, dan bercahaya.</p>
        
        <div style="display: flex; gap: 20px; margin-top: 30px;">
            <div style="flex: 1; background: var(--soft-pink); padding: 20px; border-radius: 15px;">
                <h3 style="color: #D4A5B5; margin-bottom: 10px;">✨ Filosofi Brand</h3>
                <p>K-Beauty yang lembut, clean, dan fokus ke healthy glowing skin (glass skin look).</p>
            </div>
            <div style="flex: 1; background: var(--light-sage); padding: 20px; border-radius: 15px;">
                <h3 style="color: #D4A5B5; margin-bottom: 10px;">🎯 Target Konsumen</h3>
                <p>Remaja – dewasa yang menginginkan daily skincare yang aman & simple.</p>
            </div>
        </div>
    </div>

    <h2 style="color: #D4A5B5; margin: 40px 0 20px 0;">Produk Unggulan</h2>
    
    <div class="product-grid">
        <?php
        $query = "SELECT * FROM produk LIMIT 4";
        $result = mysqli_query($conn, $query);
        
        while ($row = mysqli_fetch_assoc($result)) {
        ?>
        <div class="product-card">
            <div class="product-img">
                🧴
            </div>
            <div class="product-info">
                <h3 class="product-name"><?php echo htmlspecialchars($row['nama']); ?></h3>
                <span class="badge badge-skincare"><?php echo $row['kategori']; ?></span>
                <p class="product-price">Rp <?php echo number_format($row['harga'], 0, ',', '.'); ?></p>
                <p style="font-size: 0.9rem; color: #777; margin-top: 10px;">
                    Stok: <?php echo $row['stok']; ?> unit
                </p>
                <div style="margin-top: 15px; display: flex; gap: 10px;">
                    <a href="edit.php?id=<?php echo $row['id']; ?>" class="btn btn-secondary" style="padding: 8px 15px; font-size: 0.9rem;">Edit</a>
                    <a href="hapus.php?id=<?php echo $row['id']; ?>" class="btn btn-primary" style="padding: 8px 15px; font-size: 0.9rem;" 
                       onclick="return confirm('Hapus produk ini?')">Hapus</a>
                </div>
            </div>
        </div>
        <?php } ?>
    </div>
    
    <div style="text-align: center; margin-top: 40px;">
        <a href="produk.php" class="btn btn-primary">Lihat Semua Produk →</a>
    </div>
</div>

<?php include 'footer.php'; ?>