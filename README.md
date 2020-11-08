Nama: Faiz Hilmawan Masyfa 
NIM:  185150701111006

Tugas pertama yang dilakukan adalah menambahkan route "$router->get('books/{id}', 'BooksController@cariId');" pada web.php. Route tersebut mengarah ke BooksController.php pada fungsi cariId dengan parameter id. Fungsi tersebut akan mencari ketersediaan buku sesuai id yang ditentukan. ketika id buku tersebut ditemukan maka akan memberikan response berupa json berisi data buku tersebut dan status code 200 OK. Namun ketika id buku tidak ditemukan maka akan memberi response berupa pesan "Book Not Found" dengan status code 404 Not Found.

Sebelum masuk pada challenge dilakukan langkah percobaan terlebih dahulu berupa penambahan fungsi store, update, dan destroy pada percobaan modul 5. Setelah itu baru masuk pada chellenge dan langkah pertama yang dilakukan membuat database authors dengan migrate. Database tersebut berisi atribut id, name, gender, boigraphy dan timestamp. Setelah database dibuat maka dilanjutkan dengan pembuatan model dan fungsi-fungsi controller untuk authors. controllernya sendiri sama seperti pada langkah percobaan hanya perlu sedikit penyesuaian saja.
