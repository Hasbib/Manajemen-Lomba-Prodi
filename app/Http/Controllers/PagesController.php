<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index()
    {
        return Inertia::render('Index');
    }
    public function kontak()
    {
        return Inertia::render('Utama/Kontak');
    }
    public function informasiberita()
    {
        return Inertia::render('Utama/Informasiberita');
    }
    public function login()
    {
        return Inertia::render('Utama/Login');
    }
    public function daftar()
    {
        return Inertia::render('Utama/Daftar');
    }
    public function lupapassword()
    {
        return Inertia::render('Utama/Lupapassword');
    }
    public function index2()
    {
        return Inertia::render('Admin/Index2');
    }
    public function partisipan()
    {
        return Inertia::render('Admin/Partisipan');
    }
    public function pesan()
    {
        return Inertia::render('Admin/Pesan');
    }
    public function lomba()
    {
        return Inertia::render('Admin/Lomba');
    }
    public function tambahlomba()
    {
        return Inertia::render('Admin/Lomba/Tambahlomba');
    }
    public function editlomba()
    {
        return Inertia::render('Admin/Lomba/Editlomba');
    }
    public function detaillomba()
    {
        return Inertia::render('Admin/Lomba/Detaillomba');
    }
    public function administrator()
    {
        return Inertia::render('Admin/Administrator');
    }
    public function tambahadministrator()
    {
        return Inertia::render('Admin/Administrator/Tambahadministrator');
    }
    public function detailadministrator()
    {
        return Inertia::render('Admin/Administrator/Detailadministrator');
    }
    public function tim()
    {
        return Inertia::render('Admin/Tim');
    }
    public function detailtim()
    {
        return Inertia::render('Admin/Tim/Detailtim');
    }
    public function sponsor()
    {
        return Inertia::render('Admin/Sponsor');
    }
    public function tambahsponsor()
    {
        return Inertia::render('Admin/Sponsor/Tambahsponsor');
    }
    public function editsponsor()
    {
        return Inertia::render('Admin/Sponsor/Editsponsor');
    }
    public function detailsponsor()
    {
        return Inertia::render('Admin/Sponsor/Detailsponsor');
    }
    public function berita()
    {
        return Inertia::render('Admin/Berita');
    }
    public function tambahberita()
    {
        return Inertia::render('Admin/Berita/Tambahberita');
    }
    public function editberita()
    {
        return Inertia::render('Admin/Berita/Editberita');
    }
    public function detailberita()
    {
        return Inertia::render('Admin/Berita/Detailberita');
    }
    public function setting()
    {
        return Inertia::render('Admin/Setting');
    }
    public function tambahsetting()
    {
        return Inertia::render('Admin/Setting/Tambahsetting');
    }
    public function editsetting()
    {
        return Inertia::render('Admin/Setting/Editsetting');
    }


    public function dashboardjuri()
    {
        return Inertia::render('Juri/Dashboardjuri');
    }
    public function rangkingjuri()
    {
        return Inertia::render('Juri/Rangkingjuri');
    }
    public function tabelrangkingjuri()
    {
        return Inertia::render('Juri/Rangking/Tabelrangkingjuri');
    }
    public function lombajuri()
    {
        return Inertia::render('Juri/Lombajuri');
    }
    public function tabellomba()
    {
        return Inertia::render('Juri/Lomba/Tabellomba');
    }
    public function nilai()
    {
        return Inertia::render('Juri/Lomba/Nilai');
    }


    public function rangking()
    {
        return Inertia::render('Admin/Adminrangking');
    }
    public function tabelrangking()
    {
        return Inertia::render('Admin/Rangking/Tabelrangkingjuri');
    }



    public function dashboardpetugas()
    {
        return Inertia::render('Petugas/Dashboardpetugas');
    }
    public function partisipanpetugas()
    {
        return Inertia::render('Petugas/Partisipanpetugas');
    }
    public function timpetugas()
    {
        return Inertia::render('Petugas/Timpetugas');
    }
    public function timdetail()
    {
        return Inertia::render('Petugas/Tim/Timdetail');
    }
    public function pesanpetugas()
    {
        return Inertia::render('Petugas/Pesanpetugas');
    }
    public function rangkingpetugas()
    {
        return Inertia::render('Petugas/Rangkingpetugas');
    }
    public function petugasrangking()
    {
        return Inertia::render('Petugas/Rangking/Petugasrangking');
    }


    public function overviewpeserta()
    {
        return Inertia::render('Peserta/Overviewpeserta');
    }
    public function detailpeserta()
    {
        return Inertia::render('Peserta/Detailpeserta');
    }
    public function profilpeserta()
    {
        return Inertia::render('Peserta/Profilpeserta');
    }
    public function notifikasipeserta()
    {
        return Inertia::render('Peserta/Notifikasipeserta');
    }
    public function reportpeserta()
    {
        return Inertia::render('Peserta/Reportpeserta');
    }
    public function detailtimreport()
    {
        return Inertia::render('Peserta/Report/Detailtimreport');
    }
    public function daftarlomba()
    {
        return Inertia::render('Peserta/Daftarlomba');
    }
    public function datatim()
    {
        return Inertia::render('Peserta/Daftar/Datatim');
    }
    public function anggotatim()
    {
        return Inertia::render('Peserta/Daftar/Anggotatim');
    }
    public function pengumpulankarya()
    {
        return Inertia::render('Peserta/Daftar/Pengumpulankarya');
    }



    public function proses()
    {
        return Inertia::render('Proses');
    }


}