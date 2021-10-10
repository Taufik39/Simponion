# Simponion
 Repository untuk mata kuliah Web Framework 2021


## Instalasi
Berikut langkah untuk menjalankan web di localhost.

1. Tools yang harus disiapkan :
    - [PHP][1] >= 7.3
    - [Composer][2]
    - 
2. Clone repository ini dengan command berikut di GIT console:
            
        git clone git@github.com:Taufik39/Simponion.git Simponion

    atau dengan menggunakan GitHub Desktop dengan cara pilih menu File kemudian pilih Clone Repository... lalu masukkan link berikut di Field URL
    
        https://github.com/Taufik39/Simponion
    
    kemudian pilih folder tempat penyimpanan kemudian pilih Clone.
    Repository berhasil di-Clone
    
3. Instal dependencies yang diperlukan dengan menggunakan [Composer][2] dengan cara menjalankan command berikut:

        composer install
        
4. Buat app key dengan command:

        php artisan key:generate
        
5. Jalankan web dengan menggunakan command:

        php artisan serve

[1]: https://www.php.net "PHP"
[2]: https://getcomposer.org "Composer"
