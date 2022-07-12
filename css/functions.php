<?php 

    function connect() {
        // Koneksi ke Database
        $connect = mysqli_connect('localhost', 'root', '', 'alur_bandung') or die('FAILED TO CONNECT!!');
        return $connect;
    }

    function query($sql) {

        $connect = connect();
        // Querry ke tabel
        $result = mysqli_query($connect, $sql) or die(mysqli_error($connect));

        // Siapkan data
        $rows = [];
        while($row = mysqli_fetch_assoc($result)) {
            $rows[] = $row;
        }
        return $rows;
    }

    
    // Fungsi Admin

    function tambahAdmin($data) {
        $connect = connect();
        
        $username = htmlspecialchars($data["username"]);
        $password = htmlspecialchars($data["password"]);
        $id = query("SELECT id_admin FROM admin ORDER BY id_admin DESC")[0]['id_admin'] + 1;
        
        
        $query = "INSERT INTO admin VALUES (NULL, 'admin$id', '$username', SHA1('$password'))";
        
        mysqli_query($connect, $query) or die(mysqli_error($connect));
        
        return mysqli_affected_rows($connect);
    }

    // Password change
    
    function passwordSAdmin($id, $edit) {
        $connect = connect();
        $password = $edit['password'];
        $confirm = $edit['confirmPassword'];

        if($password === $confirm) {
            $query = "UPDATE superadmin SET password = SHA1('$password') WHERE id = $id";
            
            mysqli_query($connect, $query) OR DIE(mysqli_error($connect));

            return mysqli_affected_rows($connect);
        }
        else {
            return false;
        }
    }

    function passwordUser($id, $edit) {
        $connect = connect();
        $password = $edit['password'];
        $confirm = $edit['confirmPassword'];

        if($password === $confirm) {
            $query = "UPDATE user SET password = SHA1('$password') WHERE id_user = $id";
            
            mysqli_query($connect, $query) OR DIE(mysqli_error($connect));

            return mysqli_affected_rows($connect);
        }
        else {
            return false;
        }
    }
