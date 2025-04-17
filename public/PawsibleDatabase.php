<?php
class PawsibleDatabase {
    private $conn;

    // create a PDO connection
    function createConnection($host, $user, $password, $dbname) {
        try {
            $dsn = "mysql:host=$host;dbname=$dbname;charset=utf8mb4";
            $this->conn = new PDO($dsn, $user, $password);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $error) {
            die("Connection failed: " . $error->getMessage());
        }
    }

    // --- CRUD methods ---

    // insert data into a table
    function create($table, $data) {
        $columns = implode(", ", array_keys($data));
        $placeholders = ":" . implode(", :", array_keys($data));
        $query = "INSERT INTO $table ($columns) VALUES ($placeholders)";
        $stmt = $this->conn->prepare($query);

        try {
            return $stmt->execute($data);
        } catch (PDOException $error) {
            die("Insert failed: " . $error->getMessage());
        }
    }

    // read data from a table with optional conditions
    function read($table, $conditions = []) {
        $query = "SELECT * FROM $table";

        if (!empty($conditions)) {
            $whereClauses = [];
            foreach ($conditions as $column => $value) {
                $whereClauses[] = "$column = :$column";
            }
            $query .= " WHERE " . implode(" AND ", $whereClauses);
        }

        $stmt = $this->conn->prepare($query);

        try {
            $stmt->execute($conditions);
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $error) {
            die("Read failed: " . $error->getMessage());
        }
    }

    // update data in a table with a condition
    function update($table, $data, $condition) {
        $updates = [];
        foreach ($data as $column => $value) {
            $updates[] = "$column = :$column";
        }
        $updates_str = implode(", ", $updates);
        $query = "UPDATE $table SET $updates_str WHERE $condition";

        $stmt = $this->conn->prepare($query);

        try {
            return $stmt->execute($data);
        } catch (PDOException $error) {
            die("Update failed: " . $error->getMessage());
        }
    }

    // delete data from a table with a condition
    function delete($table, $condition, $params = []) {
        $query = "DELETE FROM $table WHERE $condition";
        $stmt = $this->conn->prepare($query);

        try {
            return $stmt->execute($params);
        } catch (PDOException $error) {
            die("Delete failed: " . $error->getMessage());
        }
    }

    // get and close the PDO connection
    function getConnection() {
        return $this->conn;
    }

    function closeConnection() {
        $this->conn = null;
    }
}
?>