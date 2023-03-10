<?php

class UserClass extends Database
{
   //Create Account
    public function createAccount($data): array
    {
        $name = htmlspecialchars($data['name']);
        $email = htmlspecialchars($data['email']);
        $password = htmlspecialchars($data['password']);
        $confirmpassword = htmlspecialchars($data['confirmpassword']);
        if(empty($name) || empty($email) || empty($password) || empty($confirmpassword)){
            $response = array(
                "status" => 0,
                "message" => "Please fill all field!"
            );
        }else{
            if($confirmpassword != $password){
                $response = array(
                    "status" => 0,
                    "message" => "Password Mismatch!"
                );
        }else{
                $stmt = $this->prepare("SELECT UPrimaryEmail FROM ". users ." WHERE UPrimaryEmail = :email");
                $stmt->bindParam(":email", $email);
                $stmt->execute();
                if ($stmt->rowCount() > 0) {
                    $response = array(
                        "status" => 0,
                        "message" => "Email address already in use!"
                    );
                } else {
                        $hash = password_hash("$password", PASSWORD_DEFAULT);
                        $stmt = $this->prepare("INSERT INTO " . users . " (UFullName, UPrimaryEmail, UPassword) VALUES ( :name, :email, :password) ");
                        $stmt->bindParam(":name", $name);
                        $stmt->bindParam(":email", $email);
                        $stmt->bindParam(":password", $hash);
                        $stmt->execute();
                        if ($stmt->rowCount() > 0) {
                            $response = array(
                                "status" => 1,
                                "message" => "Account Signup Successful"
                            );
                        } else {
                            $response = array(
                                "status" => 0,
                                "message" => "Something went wrong, try again!"
                            );
                        }
                }
                
            }
        }
        
        return $response;

    }


    //Create Login
    public function Login($email, $password):array
    {
        $stmt = $this->prepare("SELECT  _UId as id, Upassword as _password FROM ".users." WHERE UPrimaryEmail = :email" );
        $stmt->bindParam(":email", $email);
        $stmt->execute();
        if($stmt->rowCount()>0){
			
			$userData = $stmt->fetch(PDO::FETCH_ASSOC);
			if(password_verify($password, $userData['_password'])){

                $response = array(
                    "status" => 1,
                    "userid" => $userData['id']
                );
            }else{
				
				$response = array(
                    "status" => 0,
                    "message" => "Invalid Password!"
                );
				
			}
        }else{
            $response = array(
                "status" => 0,
                "message" => "Invalid Email!"
            );
        }
        return $response;
    }


    //Fetch Product from data base
    public function Products():array
    {
        $stmt = $this->prepare("SELECT PId as _id, PName as _Name, PSku as _Sku, oldPrice as _OPrice, newPrice as _NPrice, PDesc as _Desc, PStatus as _status, brand as _brand FROM ". products ." WHERE PStatus = 'ON' " );
        $stmt->execute();
        if($stmt->rowCount()>0){
			
			while($userData = $stmt->fetch(PDO::FETCH_ASSOC)){
                $response[] = $userData;
            }

        $response = array(
                "status" => 200,
                "message" => "product found",
                "data" => $response, 
        );
			
        }else{
            $response = array(
                "status" => 0,
                "message" => "No Product Found!"
            );
        }
        return $response;
    }
    

    // Query for Featured Product

    public function featuredProduct(): array
    {
        $stmt = $this->prepare("SELECT PId as _id, PName as _Name, PSku as _Sku, oldPrice as _OPrice, newPrice as _NPrice, PDesc as _Desc, PStatus as _status, brand as _brand FROM ". products ." WHERE PStatus = 'ON' && featuredProduct = 'featured' " );
        $stmt->execute();
        if($stmt->rowCount() > 0){
            while($rowFeatured = $stmt->fetch(PDO::FETCH_ASSOC)){
                $response[] = $rowFeatured;
            }
            $response = array(
                "status" => 200,
                "message" => "Featured Products available!",
                "data" => $response,
            );
        }else{
            $response = array(
                "status" => 0,
                "message" => "Featured Products not available!"
            );
        }
        return $response;

    }


    // Query for Product category
    public function productCategory(): array
    {
        $stmt = $this->prepare("SELECT cat_Id as _id, catName as _Name, catStatus FROM  " . product_category . " WHERE catStatus = 'True' ");
        $stmt->execute();
        if($stmt->rowCount() > 0){
            while ($rowCategory = $stmt->fetch(PDO::FETCH_ASSOC)) {
                # code...
                $response[] = $row;
            }
            $response = array(
                "status" => 200,
                "message" => "Categories avaialable",
                "data" => $response,
            );
        }else{
            $response = array(
                "status" => 0,
                "message" => "No categoriy found"
            );
        }
        return $response;
    }


    public function latestProduct(): array
    {
        $stmt = $this->prepare("SELECT PId as _id, PName as _Name, PSku as _Sku, PDes as _Desc, PStatus as _status, brand as _brand FROM ". products ." WHERE PStatus = 'ON' ORDER BY DESC ");
        $stmt->execute();
        if($stmt->rowCount() > 0){
            while($rowLatest = $stmt->fetch(PDO::FETCH_ASSOC)){
                $response[] = $rowLatest;
            }
            $response = array(
                "status" => 200,
                "message" => "Successful",
                "data" => $response,
            );
        }else{
                $response = array(
                "status" => 0,
                "message" => "Failed!",
            );
            
        }
        return $response;
    }


    public function topProduct(): array
    {
        $stmt = $this->prepare("SELECT PId as _id, PName as _Name, PSku as _Sku, PDes as _Desc, PStatus as _status, brand as _brand, PRating as _Rating FROM ". products ." WHERE PStatus = 'ON' ORDER BY _Rating ");
        $stmt->execute();
        if($stmt->rowCount() > 0){
            while($rowTopProduct = $stmt->fetch(PDO::FETCH_ASSOC)){
                $response[] = $rowTopProduct;
            }
            $response = array(
                "status" => 200,
                "message" => "Successful",
                "data" => $response,
            );
        }else{
                $response = array(
                "status" => 0,
                "message" => "Failed!",
            );
            
        }
        return $response;
    }

    //Calculating percentage 
   private function percentageOff($percent, $old_price){
        $discount_value = ($old_price/100) * $percent;
        $new_price = $old_price - $discount_value;
        return $new_price;
        
    }
         
    }



