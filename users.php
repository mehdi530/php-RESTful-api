
<?php




class users
{
  
# Ddatabase Name : backend And Table Name : users => Id,Email,Password
  
  
# please set your database info 
  private $host = "localhost";
  private $db = "backend";
  private $db_user = "root";
  private $db_password = '';




  public function user_add($email, $password)
  {
 
     if ( $this->user_check_byEmail($email)=="no") {


     

    $conn = new PDO("mysql:host={$this->host};dbname={$this->db};user={$this->db_user};password={$this->db_password}");


    $statement = $conn->prepare("INSERT INTO users (email,password) VALUES(?,?)");



    $statement->bindParam(1, $email);
    $statement->bindParam(2, $password);

    $result = $statement->execute();

    return "SuccessFully";

  } else {return "User is Valid " ; }
  

  }


  public function user_showAll()
  {

    $conn = new PDO("mysql:host={$this->host};dbname={$this->db};user={$this->db_user};password={$this->db_password}");

    $result = $conn->query("SELECT * FROM users");

    #    echo '<ul>';
    # while( $user = $result->fetch() ) {
    #  echo '<li>' . $user['email'] . ' :  ' . $user['password'] . '</li>';
    #}
    #echo '</ul>';

    $array = $result->fetchAll(PDO::FETCH_ASSOC);
    $json = json_encode($array);

    return $json;
  }




  public function user_show_byid($id)
  {

    $conn = new PDO("mysql:host={$this->host};dbname={$this->db};user={$this->db_user};password={$this->db_password}");

    $result = $conn->query("SELECT * FROM users where id=$id ");



    $array = $result->fetchAll(PDO::FETCH_ASSOC);

    $json = json_encode($array);

    return $json;
  }



  public function user_show_byEmail($email)
  {

    $conn = new PDO("mysql:host={$this->host};dbname={$this->db};user={$this->db_user};password={$this->db_password}");

    $result = $conn->query("SELECT * FROM users where email='$email' ");



    $array = $result->fetchAll(PDO::FETCH_ASSOC);

    $json = json_encode($array);

    return $json;
  }


  public function user_check_byEmail($email)
  {

    $conn = new PDO("mysql:host={$this->host};dbname={$this->db};user={$this->db_user};password={$this->db_password}");

     
    $result = $conn->query("SELECT * FROM users where email='$email' ");

    $array = $result->fetchAll(PDO::FETCH_ASSOC);

     if(empty($array)) {
      return "no" ;
     }else{
      return "yes" ;
     }
     
 

    




     
  }


}



?>
