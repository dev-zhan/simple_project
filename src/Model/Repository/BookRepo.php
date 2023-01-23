<?php

use App\Model\Book;

class BookRepo
{
    private function connectDB(): PDO
    {
        $connection = new PDO("mysql:host=localhost;dbname=books_db","root","zhanarys");
        return $connection;
    }

    public function getAll(){
        $pdo = $this->connectDB();
        $query = "SELECT * FROM books";
        $data = $pdo->query($query)->fetchAll();

        $result = [];

        foreach ($data as $bookData){
            $result[] = new Book($bookData);
        }

        return $result;
    }

    public function getViewId($id){

        $pdo = $this->connectDB();
        $query = "SELECT id, title, description, price FROM adverts WHERE id = ?";
        $stmt = $pdo->prepare($query);
        $stmt->execute(array($id));

        $data = $stmt->fetch(PDO::FETCH_ASSOC);
        $result[] = new Book($data);

        return $result;
    }

    public function insert(array $bookData): Book{
        $pdo = $this->connectDB();
        $bookData['id'] = $bookData['id']++;
        $name = $bookData['name'];
        $author_id = $bookData['author_id'];
        $description = $bookData['description'];
        $page_count = $bookData['page_count'];

        $stmt = $pdo->prepare("INSERT INTO books(name, author_id,description,page_count) 
        VALUES (?,?,?,?)");
        $stmt->execute(array($name, $author_id,$description,$page_count));

        return new Book($bookData);
    }

}