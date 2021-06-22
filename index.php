<?php

require ('controller/control.php');

if(empty($_SESSION['Active'])){ 
    login();
    exit;
}

if (isset($_GET['action'])){
    if ($_GET['action'] == 'deleteInvoiceHome') {
        deleteInvoices();
    }
    if ($_GET['action'] == 'deleteInvoice') {
        deleteInvoices();
    }
    if ($_GET['action'] == 'deleteContactHome') {
        deleteContacts();
    }
    if ($_GET['action'] == 'deleteContact') {
        deleteContacts();
    }
    if ($_GET['action'] == 'deleteCompany') {
        deleteCompanies();
    }
    if ($_GET['action'] == 'deleteCompanyHome') {
        deleteCompanies();
    }

    if ($_GET['action'] == 'home') {
        home();
    }
    if ($_GET['action'] == 'clients') {
        clientList();
    }
    if ($_GET['action'] == 'providers') {
        providers();
    }
    if ($_GET['action'] == 'invoices') {
        invoices();
    }

    if ($_GET['action'] == 'contacts') {
        contacts();
    }

    if ($_GET['action'] == 'companies') {
        companies();
    }

    if ($_GET['action'] == 'détailsContacts' && isset($_GET['id']) && $_GET['id'] > 0) {
        detailContact();
    }
    if ($_GET['action'] == 'détailsClients' && isset($_GET['id']) && $_GET['id'] > 0) {
        detailClient();
    }
    if ($_GET['action'] == 'détailsInvoices' && isset($_GET['id']) && $_GET['id'] > 0) {
        detailInvoices();
    }
    if ($_GET['action'] == 'détailsProviders' && isset($_GET['id']) && $_GET['id'] > 0) {
        detailProviders();
    } 
    if ($_GET['action'] == 'détailsCompany' && isset($_GET['id']) && $_GET['id'] > 0) {
        detailCompany();
    }

    if ($_GET['action'] == 'addCompanies') {
        addCompanie();
    }

    if ($_GET['action'] == 'createCompanies') {
        createCompanie();
    }

    if ($_GET['action'] == 'addInvoices') {
        addInvoices();
    }

    if ($_GET['action'] == 'createInvoices') {
        createInvoices();
    }

    if ($_GET['action'] == 'addContacts') {
        addContact();
    }

    if ($_GET['action'] == 'createContact') {
        createContact();
    }

    if ($_GET['action'] == 'login') {
        login();
    }
    if ($_GET['action'] == 'logout') {
        logout();
    }
}
else {
  
    home();
}