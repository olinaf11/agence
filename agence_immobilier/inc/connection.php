<?php
        function connectiondb(){
                $user='postgres';
                $pass='tiger';
                $dsn='pgsql:host=localhost;port=5432;dbname=agence';
        
                try {
                        $dbh = new PDO($dsn, $user, $pass);
                        return $dbh;
                } catch (PDOException $e) {
                        return "Erreur ! : " . $e->getMessage();
                        die();
                }
                return false;
        }

