#!/bin/sh
set -e

echo "[WP-CLI] Waiting for WordPress files..."
until [ -f /var/www/html/wp-config.php ]; do sleep 3; done
echo "[WP-CLI] wp-config.php found, waiting for DB..."
sleep 5

# Install WordPress if not already installed
if ! wp core is-installed --allow-root 2>/dev/null; then
  echo "[WP-CLI] Installing WordPress..."
  wp core install \
    --url="http://158.140.174.159" \
    --title="Radius Net — Platform ISP Modern" \
    --admin_user="admin" \
    --admin_password="RadiusAdmin2024!" \
    --admin_email="admin@radiusnet.id" \
    --skip-email \
    --allow-root
fi

echo "[WP-CLI] Configuring site..."

# General settings
wp option update blogname "Radius Net" --allow-root
wp option update blogdescription "Platform Manajemen ISP Modern untuk RT/RW Net & Internet Provider Indonesia" --allow-root
wp option update timezone_string "Asia/Jakarta" --allow-root
wp option update date_format "d F Y" --allow-root
wp option update permalink_structure "/%postname%/" --allow-root

# Activate custom theme
wp theme activate radius-net --allow-root 2>/dev/null || echo "[WP-CLI] Theme already active or activation skipped"

# Delete default content
wp post delete 1 --force --allow-root 2>/dev/null || true
wp post delete 2 --force --allow-root 2>/dev/null || true

# Create HOME page
wp post create \
  --post_type=page \
  --post_title="Beranda" \
  --post_status=publish \
  --post_name=beranda \
  --allow-root \
  --porcelain 2>/dev/null || true

wp option update show_on_front page --allow-root
HOME_ID=$(wp post list --post_type=page --post_name=beranda --format=ids --allow-root 2>/dev/null | head -1)
[ -n "$HOME_ID" ] && wp option update page_on_front "$HOME_ID" --allow-root

echo "[WP-CLI] WordPress setup complete!"
echo "[WP-CLI] Admin: http://localhost/wp-admin (admin / RadiusAdmin2024!)"
