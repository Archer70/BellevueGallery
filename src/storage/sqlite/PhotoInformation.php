<?php
namespace Bellevue\src\storage\sqlite;
use Bellevue\src\library_interfaces\PhotoInformationStorage;
use Bellevue\src\entities\Photo;
use PDO;

class PhotoInformation implements PhotoInformationStorage
{
    private $db;

    public function __construct()
    {
        $this->db = new PDO('sqlite:' . __DIR__ . '/database/database.db');
    }

    public function save(Photo $photo)
    {

    }

    public function getById($id)
    {
        $statement = $this->db->prepare('
            SELECT title, description, filename, gallery
            FROM photos
            WHERE id = :photo'
        );
        $statement->bindParam(':photo', $id, PDO::PARAM_INT);
        $statement->execute();
        $result = $statement->fetch(PDO::FETCH_OBJ);
        $statement->closeCursor();
        return $result;
    }
}
