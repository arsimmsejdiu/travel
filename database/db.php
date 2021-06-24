<?php
class DB
{
    private $server = "localhost";
    private $username = "root";
    private $password = "NejeL8";
    private $db = "projet5";
    private $conn;

    public function __construct()
    {
        try {

            $this->conn = new mysqli($this->server, $this->username, $this->password, $this->db);
        } catch (Exception $e) {
            echo "connection failed" . $e->getMessage();
        }
    }

    public function fetch()
    {
        $data = [];

        $query = "SELECT * FROM gites WHERE disponible='oui'";
        if ($sql = $this->conn->query($query)) {
            while ($row = mysqli_fetch_assoc($sql)) {
                $data[] = $row;
            }
        }
        return $data;
    }

    public function fetch_single($id)
    {

        $data = null;

        $query = "SELECT * FROM gites WHERE id = '$id'";
        if ($sql = $this->conn->query($query)) {
            while ($row = $sql->fetch_assoc()) {
                $data = $row;
            }
        }
        return $data;
    }

    public static function reserverGite($id, $date, $nom, $prenom, $mail)
	{
		$dns = "mysql:host=localhost;dbname=projet5;charset=utf8";
		$pdo = new PDO($dns, "root", "NejeL8");
		$pdo->query("UPDATE gites SET disponible='non' WHERE id='".$id."'");

        // Envoi du mail
        $en_tete = 'MIME-Version: 1.0'."\r\n";
        $en_tete .= 'Content-type: text/html; charset=UTF-8'."\r\n";
        $objet = 'Your Reservation is Validated';
        $contenu = "<html><head><title>Thank you for the reservation: " . $prenom . " " . $nom . " on " . $date . " !</title></head><body>";
        $contenu .= "</body></html>";
        mail($mail, $objet, $contenu, $en_tete);
	}
}
