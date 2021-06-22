<?php

require ('model/model.php');


function deleteInvoices(){
    $invoices_data = new Invoices;
    $del_invoice = $invoices_data->deleteInvoices();
    if($_GET['action'] == "deleteInvoiceHome"){
        header("Location:?action=home");  
    } else if ($_GET['action'] == "deleteInvoice"){
        header("Location:?action=invoices");
    }
}

function deleteCompanies(){
    $companies_data = new Companies;
    $del_company = $companies_data->deleteCompanies();
    if($_GET['action'] == "deleteCompanyHome"){
        header("Location:?action=home");  
    } else if ($_GET['action'] == "deleteCompany"){
        header("Location:?action=companies");
    }
}

function deleteContacts(){
    $contacts_data = new Contacts;
    $del_contact = $contacts_data->deleteContacts();
    if($_GET['action'] == "deleteContactHome"){
        header("Location:?action=home");  
    } else if ($_GET['action'] == "deleteContact"){
        header("Location:?action=contacts");
    }
}


function clientList(){
    $contact_data = new Contacts;
    $client_data = $contact_data->getClients();
    

    require ('views/clients.php');

}

function home(){

    $contact_data = new Contacts;
    $invoices_data = new Invoices;
    $companies_data = new Companies;
    $contacts = $contact_data->getFive();
    $invoices = $invoices_data->getFive();
    $companies = $companies_data->getFive();


    require('views/home.php');
}

function detailClient(){

    $contact_data = new Contacts;
    $contacts = $contact_data->getOneContact();


    require ('views/clientDetail.php');
}


function detailCompany()
{

    $companies_data = new Companies;
    $companies = $companies_data->getOneCompany();
    $invoices =  $companies_data->getInvoicesCompanies();
    $contacts =  $companies_data->getContactCompanies();

    //var_dump($companies);
    require ('views/companyDetail.php');
}

function providers()
{
    $providers_data = new Providers;
    $providers = $providers_data->getProviders();

    require ('views/providers.php');
}

function detailProviders()
{

    $providers_data = new Providers;
    $providers = $providers_data->getOneProvider();

    require ('views/providerDetail.php');



}

function invoices(){

    $invoices_data = new Invoices;
    $invoices = $invoices_data->getInvoices();


    require ('views/invoices.php');

}

function detailInvoices(){

    $invoices_data = new Invoices;
    $invoices = $invoices_data->getOneInvoice();


    require ('views/invoiceDetail.php');
}

function login(){

    $login_form = new Login;
    $login = $login_form->getlogin();

    require ('views/login.php');

}

 function addCompanie(){
     $companies_data = new Providers();
     $companies_types = $companies_data->getCompaniesTypes();

     require ('views/company_form.php');
 }
 
function createCompanie(){
    $companies_data = new Providers();
    $companies_add = $companies_data->addCompanie();

    header("Location:?action=addCompanies");
}

function addInvoices(){
    $invoices_data = new Invoices();
    $names = $invoices_data->getCompanyName();
    $contacts_names = $invoices_data->getRegarding();

    require ('views/invoice_form.php');
}

function createInvoices(){
    $invoices_data = new Invoices();
    $invoices_add = $invoices_data->addInvoice();

    header("Location:?action=addInvoices");

}

function addContact(){
    $contact_datas = new Contacts();
    $names = $contact_datas->getCompanyName();


    require ('views/contact_form.php');
}

function createContact(){
    $contact_datas = new Contacts();
    $contact_data = $contact_datas->addContact();

    header("Location:?action=addContact");

}
function contacts(){
    $contacts_data = new Contacts;
    $contacts = $contacts_data->getContacts();

    require ('views/contacts.php');
}

function companies(){
    $companies_data = new Companies;
    $companies = $companies_data->getCompanies();

    require ('views/companies.php');
}

function detailContact(){

    $contact_data = new Contacts;
    $contacts = $contact_data->getOneContact();

    require ('views/contactDetail.php');
}

function  logout(){
    $logout = new Login();
    $out = $logout->getLogout();
}