<div class="footer">
        <p>ANNIÉ SKIN &copy; 2024 - Gentle Care, Glass Skin</p>
        <p style="margin-top: 10px; font-size: 0.9rem; color: #888;">
            Brand skincare Korea dengan nuansa lembut dan feminin
        </p>
    </div>
    
    <script>
        // Notifikasi sukses
        const urlParams = new URLSearchParams(window.location.search);
        if (urlParams.has('success')) {
            alert('Produk berhasil disimpan!');
            window.history.replaceState({}, document.title, window.location.pathname);
        }
    </script>
</body>
</html>