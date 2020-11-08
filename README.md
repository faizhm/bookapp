Nama: Faiz Hilmawan Masyfa 
NIM:  185150701111006

Tugas pertama yang dilakukan adalah menambahkan route "$router->get('books/{id}', 'BooksController@cariId');" pada web.php. Route tersebut mengarah ke BooksController.php pada fungsi cariId dengan parameter id. Fungsi tersebut akan mencari ketersediaan buku sesuai id yang ditentukan. ketika id buku tersebut ditemukan maka akan memberikan response berupa json berisi data buku tersebut dan status code 200 OK. Namun ketika id buku tidak ditemukan maka akan memberi response berupa pesan "Book Not Found" dengan status code 404 Not Found.
