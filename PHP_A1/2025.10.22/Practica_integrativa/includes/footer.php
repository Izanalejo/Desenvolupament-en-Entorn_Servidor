 <?php $dir = "/PHP_A1/2025.10.22/Practica_integrativa/"?>
 <footer class="site-footer">
        <div class="container">
            <div class="footer-content">
                <div class="footer-section">
                    <h3>Acerca de</h3>
                    <p>Sitio web con estructura modular en PHP.</p>
                </div>
                <div class="footer-section">
                    <h3>Enlaces</h3>
                    <ul>
                        <li><a href="<?=$dir?>index.php">Inicio</a></li>
                        <li><a href="<?=$dir?>about.php">Acerca de</a></li>
                        <li><a href="<?=$dir?>/servicios/index.php">Servicios</a></li>
                    </ul>
                </div>
                <div class="footer-section">
                    <h3>Contacto</h3>
                    <p>Email: info@ejemplo.com</p>
                    <p>Tel: +34 123 456 789</p>
                </div>
            </div>
            <div class="footer-bottom">
                <p>&copy; <?php echo date('Y'); ?> Mi Sitio Web. Todos los derechos reservados.</p>
            </div>
        </div>
    </footer>
</body>
</html>