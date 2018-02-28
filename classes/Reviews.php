<?php

class Reviews
{
    private $pdo;
    private $reviews;

    private $count;
    private $id;
    private $name;
    private $surname;
    private $email;
    private $subject;
    private $rating;
    private $description;
    private $category;
    private $ip;

    private $limit;

    private $imageUrl;
    private $imageSize;
    private $imageType;


    public function __construct()
    {

        $this->pdo = Db::getInstance()->getDb();
    }

    public function setAllDbParameters($name,$surname,$email,$imageUrl,$rating,$description,$category,$ip)
    {
        $this->name = $name;
        $this->surname = $surname;
        $this->email = $email;
        $this->imageUrl = $imageUrl;
        $this->rating = $rating;
        $this->description = $description;
        $this->category = $category;
        $this->ip = $ip;
    }

    public function getReviews()
    {
        return  $this->reviews = $this->pdo->query("SELECT * FROM reviews ORDER BY id DESC")->fetchAll();
    }

    public function getLimit($from,$limit)
    {
        return  $this->reviews = $this->pdo->query("SELECT * FROM reviews ORDER BY id DESC LIMIT ".$from.','.$limit);

    }

    public function getCount()
    {
        return  $this->count = $this->pdo->query("SELECT COUNT(*) FROM reviews")->fetchColumn();
    }



    public function getUserIp(){
        switch(true){
            case (!empty($_SERVER['HTTP_X_REAL_IP'])) : return $_SERVER['HTTP_X_REAL_IP'];
            case (!empty($_SERVER['HTTP_CLIENT_IP'])) : return $_SERVER['HTTP_CLIENT_IP'];
            case (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) : return $_SERVER['HTTP_X_FORWARDED_FOR'];
            default : return $_SERVER['REMOTE_ADDR'];
        }
    }

    public function saveReview()
    {
        $query = $this->pdo->prepare("INSERT INTO reviews (name, surname, email, category, rating, description,imageUrl, imageType, imageSize, ip) VALUES (:name, :surname, 
:email, :category,:rating, :description, :imageUrl, :imageType, :imageSize, :ip)");
        $query->bindParam(':name', $this->name);
        $query->bindParam(':surname', $this->surname);
        $query->bindParam(':email', $this->email);
        $query->bindParam(':category', $this->category);
        $query->bindParam(':rating', $this->rating);
        $query->bindParam(':description', $this->description);
        $query->bindParam(':imageUrl', $this->imageUrl);
        $query->bindParam(':imageType', $this->imageType);
        $query->bindParam(':imageSize', $this->imageSize);
        $query->bindParam(':ip', $this->ip);
        $query->execute();
    }

    public function deleteReview($id)
    {
        $query = $this->pdo->prepare("DELETE FROM reviews WHERE id = :id");
        $query->bindParam(':id',$id);
        $query->execute();
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getSurname()
    {
        return $this->surname;
    }

    /**
     * @param mixed $surname
     */
    public function setSurname($surname)
    {
        $this->surname = $surname;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param mixed $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * @return mixed
     */
    public function getSubject()
    {
        return $this->subject;
    }

    /**
     * @param mixed $subject
     */
    public function setSubject($subject)
    {
        $this->subject = $subject;
    }

    /**
     * @return mixed
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param mixed $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * @return mixed
     */
    public function getRating()
    {
        return $this->rating;
    }

    /**
     * @param mixed $rating
     */
    public function setRating($rating)
    {
        $this->rating = $rating;
    }

    /**
     * @return mixed
     */
    public function getImageUrl()
    {
        return $this->imageUrl;
    }

    /**
     * @param mixed $imageUrl
     */
    public function setImageUrl($imageUrl)
    {
        $this->imageUrl = $imageUrl;
    }

    /**
     * @return mixed
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * @param mixed $category
     */
    public function setCategory($category)
    {
        $this->category = $category;
    }

    /**
     * @return mixed
     */
    public function getIp()
    {
        return $this->ip;
    }

    /**
     * @param mixed $ip
     */
    public function setIp($ip)
    {
        $this->ip = $ip;
    }

    /**
     * @return mixed
     */
    public function getImageSize()
    {
        return $this->imageSize;
    }

    /**
     * @param mixed $imageSize
     */
    public function setImageSize($imageSize)
    {
        $this->imageSize = $imageSize;
    }

    /**
     * @return mixed
     */
    public function getImageType()
    {
        return $this->imageType;
    }

    /**
     * @param mixed $imageType
     */
    public function setImageType($imageType)
    {
        $this->imageType = $imageType;
    }
}