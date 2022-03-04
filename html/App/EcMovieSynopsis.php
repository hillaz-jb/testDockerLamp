<?php

namespace App;

use AbstractConnectToDb;
use PDO;

include 'AbstractConnectToDb.php';

class EcMovieSynopsis extends AbstractConnectToDb
{

    public function selectOneSynopsis(int $id): array
    {
        $query = 'SELECT * FROM movie_synopsis WHERE id= :idSynopsis';
        $resultats = $this->getPdo()->prepare($query);
        $resultats->execute([
            ':idSynopsis' => $id,
        ]);

        return $resultats->fetch(PDO::FETCH_ASSOC);
    }




}