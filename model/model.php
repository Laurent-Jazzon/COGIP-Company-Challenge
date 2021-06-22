<?php

session_start();

   
class Contacts{

    public function deleteContacts(){
        $db = $this->dbConnect();
        if(isset($_POST['delContact'])){
            $delContact = $_POST['delContact'];
            $del_contacts_company = $db->prepare("DELETE FROM contacts WHERE contacts_id ='".$delContact."'");
            $del_invoices_company = $db->prepare("DELETE FROM invoices WHERE invoices_contact_id ='".$delContact."'");
            
            $del_invoices_company->execute();
            $del_contacts_company->execute();
        }
    }
    public function getContacts(){
        $db = $this->dbConnect();
        $contacts_data = $db->query('SELECT * FROM contacts');
        $contacts = $contacts_data->fetchAll();
    
        return $contacts;
    }

    public function addContact(){
        $db = $this->dbConnect();
        if(isset($_POST['firstname']) 
        && isset($_POST['lastname']) 
        && isset($_POST['email']) 
        && isset($_POST['company'])){
            
            $compagnie = $db->prepare('SELECT * FROM companies WHERE companies_id = '.$_POST['company']);
            $compagnieId = $compagnie->execute();
            
            $contacts = $db->prepare('INSERT INTO contacts(contacts_firstname, contacts_lastname, contacts_email, contacts_company_id) VALUES("'.$_POST['firstname'].'", " '.$_POST['lastname'].'", "'.$_POST['email'].'", '.$compagnieId.')');
            $contacts->execute();

        }
    }
    
    public function getCompanyName(){

        $db = $this->dbConnect();
        $compagnies_names = $db->query('SELECT * FROM companies');
        $name = $compagnies_names->fetchAll();

        return $name;

    }

    public function getFive(){

        $db = $this->dbConnect();
        $contacts_data = $db->query('SELECT * FROM contacts ORDER BY contacts_id DESC LIMIT 5');
        $contacts = $contacts_data->fetchAll();

        return $contacts;

    }

    public function getOneContact(){

        $id = $_GET['id'];
        $db = $this->dbConnect();
        $contacts_data = $db->query('SELECT * FROM contacts INNER JOIN companies ON companies.companies_id=contacts.contacts_company_id WHERE contacts_id = '.$id);
        $contacts = $contacts_data->fetch();

        return $contacts;
    }



    public function getClients(){

        $db = $this->dbConnect();
        $clients = $db->query('SELECT * FROM contacts INNER JOIN companies ON contacts.contacts_company_id = companies.companies_id WHERE companies_type_id = 2');
        $data = $clients->fetchAll();


        return $data;
    }
  
      private function dbConnect(){


        $host = 'localhost';
        $db = 'cogip';
        $user = 'root';
        $password = '';


        try
        {
            $db = new PDO('mysql:host='.$host.';
            dbname='.$db.';
            charset=utf8', 
            ''.$user.'', 
            ''.$password.'', 
            array(
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ));

            return $db;
        }
        catch(Exception $e)
        {
            die('Erreur : '.$e->getMessage());
        }

    }
}

class Invoices{

        public function addInvoice(){

            $db = $this->dbConnect();

            if(isset($_POST['number']) 
            && isset($_POST['date']) 
            && isset($_POST['company']) 
            && isset($_POST['contact'])){
                
                $compagnie = $db->prepare('SELECT * FROM companies WHERE companies_id = '.$_POST['company']);
                $compagnieId = $compagnie->execute();

                $contacts = $db->prepare('SELECT * FROM contacts WHERE contacts_id = '.$_POST['contact']);
                $contactsID = $contacts->execute();

                $contacts = $db->prepare('INSERT INTO invoices(invoices_number, invoices_date, invoices_company_id, invoices_contact_id) VALUES('.$_POST['number'].', "'.$_POST['date'].'", '.$compagnieId.', '.$contactsID.')');
                $contacts->execute();

            }
        }

        public function getCompanyName(){

            $db = $this->dbConnect();
            $compagnies_names = $db->query('SELECT * FROM companies');
            $name = $compagnies_names->fetchAll();

            return $name;

        }

        public function getRegarding(){
            $db = $this->dbConnect();
            $regarding_name = $db->query('SELECT * FROM contacts');
            $name = $regarding_name->fetchAll();

            return $name;
        }


        public function getFive(){

            $db = $this->dbConnect();
            $invoices_data = $db->query('SELECT * FROM invoices ORDER BY invoices_id DESC LIMIT 5');
            $invoices = $invoices_data->fetchAll();
            return $invoices;
        }
        
    public function deleteInvoices(){
        $db = $this->dbConnect();
        if(isset($_POST['delInvoice'])){
            $delInvoice = $_POST['delInvoice'];
            $del_invoices_company = $db->prepare("DELETE FROM invoices WHERE invoices_id ='".$delInvoice."'");
            $del_invoices_company->execute();
        }
    }

    public function getInvoices(){
        $db = $this->dbConnect();
        $invoices_data = $db->query('SELECT * FROM invoices');
        $invoices = $invoices_data->fetchAll();
        return $invoices ;
    }
            
        public function getOneInvoice(){

            $db = $this->dbConnect();
            $id = $_GET['id'];
            $invoices_data = $db->query('SELECT * FROM invoices  INNER JOIN companies  ON invoices.invoices_company_id = companies.companies_id INNER JOIN contacts ON contacts_company_id = companies.companies_id  WHERE  invoices_id ='.$id);
            $invoices = $invoices_data->fetch();
            return $invoices;
        }
        
        private function dbConnect(){


            $host = 'localhost';
            $db = 'cogip';
            $user = 'root';
            $password = '';
    
    
            try
            {
                $db = new PDO('mysql:host='.$host.';
                dbname='.$db.';
                charset=utf8', 
                ''.$user.'', 
                ''.$password.'', 
                array(
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ));
                return $db;
            }
            catch(Exception $e)
            {
                die('Erreur : '.$e->getMessage());
            }

        }

}

class Companies{
    public function deleteCompanies(){
        $db = $this->dbConnect();
        if(isset($_POST['delCompany'])){
            $delCompany = $_POST['delCompany'];
            $del_company = $db->prepare("DELETE FROM companies WHERE companies_id ='".$delCompany."'");
            $del_contacts_company = $db->prepare("DELETE FROM contacts WHERE contacts_company_id ='".$delCompany."'");
            $del_invoices_company = $db->prepare("DELETE FROM invoices WHERE invoices_company_id ='".$delCompany."'");
            
            $del_invoices_company->execute();
            $del_contacts_company->execute();
            $del_company->execute();
        }
    }

    public function getCompanies(){

        $db = $this->dbConnect();
        $companies_data = $db->query('SELECT * FROM companies');
        $companies = $companies_data->fetchAll();

        return $companies;
    }


    public function getFive()
    {

        $db = $this->dbConnect();
        $companies_data = $db->query('SELECT * FROM companies ORDER BY companies_id DESC LIMIT 5');
        $companies = $companies_data->fetchAll();
        return $companies;
    }

    public function getOneCompany()
    {
        $id = $_GET['id'];
        $db = $this->dbConnect();
        $companies_data = $db->query('SELECT * FROM companies WHERE companies_id ='.$id);
        $companies = $companies_data->fetch();

        return $companies;
    }

    public function getInvoicesCompanies(){

        $id = $_GET['id'];
        $db = $this->dbConnect();
        $invoices_data = $db->query('SELECT * FROM invoices WHERE invoices_company_id ='.$id);
        $invoices = $invoices_data->fetchAll();

        return $invoices;
    }

    public function getContactCompanies(){

        $id = $_GET['id'];
        $db = $this->dbConnect();
        $contacts_data = $db->query('SELECT * FROM contacts WHERE contacts_company_id ='.$id);
        $contacts = $contacts_data->fetchAll();

        return $contacts;
    }

    private function dbConnect(){


        $host = 'localhost';
        $db = 'cogip';
        $user = 'root';
        $password = '';


        try
        {
            $db = new PDO('mysql:host='.$host.';
            dbname='.$db.';
            charset=utf8', 
            ''.$user.'', 
            ''.$password.'', 
            array(

            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ));
            return $db;
        }
        catch(Exception $e)
        {
            die('Erreur : '.$e->getMessage());
        }

    }
}

class Providers{
    public function getProviders()
    {
        $db = $this->dbConnect();
        $providers_data = $db->query('SELECT * FROM `companies` WHERE companies_type_id = 1');
        $providers = $providers_data->fetchAll();

        return $providers;
    }

    public function getOneProvider()
    {
        $id = $_GET['id'];
        $db = $this->dbConnect();
        $providers_data = $db->query('SELECT * FROM companies, invoices, contacts WHERE companies.companies_id = ' . $id . ' AND 
        companies.companies_type_id = 1 AND invoices.invoices_company_id = companies.companies_type_id
        AND contacts.contacts_id = invoices.invoices_contact_id');


        $providers = $providers_data->fetchAll();

        return $providers;
    }


    public function addCompanie(){
        $db = $this->dbConnect();
        if(isset($_POST['company_name']) 
        && isset($_POST['country']) 
        && isset($_POST['vat']) 
        && isset($_POST['company_type'])){
            
            $compagnies_type = $db->prepare('SELECT * FROM types WHERE types_id = '.$_POST['company_type']);
            $compagnie_type = $compagnies_type->execute();
            $contacts = $db->prepare('INSERT INTO companies(companies_name, companies_country, companies_vat_number, companies_type_id) VALUES("'.$_POST['company_name'].'", "'.$_POST['country'].'", "'.$_POST['vat'].'", '.$compagnie_type.')');
            $contacts->execute();

        }
    }

    public function getCompaniesTypes(){

        $db = $this->dbConnect();
        $companies_types = $db->query('SELECT * FROM types');        
        $companies_type = $companies_types->fetchAll();

        return $companies_type;
    }


    public function getFive(){

        $db = $this->dbConnect();
        $companies_data = $db->query('SELECT * FROM companies ORDER BY companies_id DESC LIMIT 5');
        $companies = $companies_data->fetchAll();
        return $companies;
    }

    private function dbConnect(){


        $host = 'localhost';
        $db = 'cogip';
        $user = 'root';
        $password = '';


        try
        {
            $db = new PDO('mysql:host='.$host.';
            dbname='.$db.';
            charset=utf8', 
            ''.$user.'', 
            ''.$password.'', 
            array(

            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ));
            return $db;
        }
        catch(Exception $e)
        {
            die('Erreur : '.$e->getMessage());
        }

    }

}

class Login {
    public function getlogin(){

        require ('config.php'); 

        if(isset($_POST['Submit'])){

            if( ($_POST['Username'] == $Username[0]) && (password_verify($_POST['Password'], $Password[0])) === true ) {
        
                $_SESSION['Username'] = $Username[0];
                $_SESSION['Active'] = true;
                header("location:?action=home");
                exit;
        
            }
            else if( ($_POST['Username'] == $Username[1]) && (password_verify($_POST['Password'], $Password[1])) === true ) {
                
                $_SESSION['Username'] = $Username[1];
                $_SESSION['Active'] = true;
                header("location:?action=home");
                exit;
            }
        }
    }

    public function getLogout(){
        session_destroy();
        header("Location:?action=login"); 
        exit;
    }

}