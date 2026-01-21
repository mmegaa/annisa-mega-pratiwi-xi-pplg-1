CREATE DATABASE annie_skin;
USE annie_skin;

CREATE TABLE produk (
    id INT PRIMARY KEY AUTO_INCREMENT,
    nama VARCHAR(100) NOT NULL,
    kategori ENUM('Skincare', 'Makeup', 'Bodycare') DEFAULT 'Skincare',
    deskripsi TEXT,
    kandungan TEXT,
    harga INT NOT NULL,
    stok INT DEFAULT 0,
    gambar VARCHAR(255),
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Data contoh produk ANNIÉ SKIN
INSERT INTO produk (nama, kategori, deskripsi, kandungan, harga, stok) VALUES
('Annié Gentle Cleanser', 'Skincare', 'Pembersih wajah lembut dengan formula pH balanced untuk kulit sensitif', 'Centella Asiatica, Hyaluronic Acid, Tea Tree Extract', 85000, 50),
('Annié Aqua Glow Toner', 'Skincare', 'Toner hidrasi dengan tekstur air yang menyegarkan kulit', '82% Rose Water, Niacinamide, Panthenol', 95000, 45),
('Annié Glass Skin Serum ⭐', 'Skincare', 'Serum wajah untuk kilau glass skin ala Korea', 'Galactomyces, Snail Mucin, Peptide Complex', 175000, 30),
('Annié Calm Barrier Cream', 'Skincare', 'Pelembab untuk memperkuat skin barrier dengan tekstur ringan', 'Ceramide, Madecassoside, Squalane', 120000, 40),
('Annié Sunscreen Essence SPF 50', 'Skincare', 'Sunscreen essence dengan proteksi tinggi dan tekstur tidak lengket', 'SPF 50 PA++++, Centella, Vitamin E', 110000, 60);