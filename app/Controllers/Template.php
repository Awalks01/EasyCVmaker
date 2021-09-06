<?php

namespace App\Controllers;

use TCPDF;

use Dompdf\Dompdf;
use Dompdf\Options;

class Template extends BaseController
{

    protected $session;
    protected $cache;



    public function __construct()
    {
        $this->session = \config\Services::session();
        $this->cache = \Config\Services::cache();
    }

    public function auckland()
    {
        $data = ($this->cache->get('cache_item_full'));
        return view('/CV-template/auckland', $data);
    }

    public function edinburgh()
    {
        $data = ($this->cache->get('cache_item_full'));
        return view('/CV-template/edinburgh', $data);
    }

    public function princeton()
    {
        $data = ($this->cache->get('cache_item_full'));
        return view('/CV-template/princeton', $data);
    }

    public function otago()
    {
        $data = ($this->cache->get('cache_item_full'));
        return view('/CV-template/otago', $data);
    }

    public function berkeley()
    {
        $data = ($this->cache->get('cache_item_full'));
        return view('/CV-template/berkeley', $data);
    }

    public function harvard()
    {
        $data = ($this->cache->get('cache_item_full'));

        return view('/CV-template/harvard', $data);
    }

    public function print_auckland()
    {

        $data = ($this->cache->get('cache_item_full'));
        $html = view('/CV-template/auckland', $data);

        // -------------------- DOMPDF---
        $options = new Options();
        $options->setIsRemoteEnabled(true);
        $options->isHtml5ParserEnabled(true);
        $dompdf = new Dompdf($options);

        $dompdf->loadHtml($html);
        // (Optional) Setup the paper size and orientation
        $dompdf->setPaper('F4', 'potrait');
        // Render the HTML as PDF
        $dompdf->render();
        // Output the generated PDF to Browser
        $dompdf->stream("nex1", array("Attachment" => false));
        //return redirect()->to('/app/index');
    }

    public function print_edinburgh()
    {

        $data = ($this->cache->get('cache_item_full'));
        $html = view('/CV-template/edinburgh', $data);

        // -------------------- DOMPDF---
        $options = new Options();
        $options->setIsRemoteEnabled(true);
        $options->isHtml5ParserEnabled(true);
        $dompdf = new Dompdf($options);

        $dompdf->loadHtml($html);
        // (Optional) Setup the paper size and orientation
        $dompdf->setPaper('F4', 'potrait');
        // Render the HTML as PDF
        $dompdf->render();
        // Output the generated PDF to Browser
        $dompdf->stream("nex1", array("Attachment" => false));
        //return redirect()->to('/app/index');
    }

    public function print_princeton()
    {

        $data = ($this->cache->get('cache_item_full'));
        $html = view('/CV-template/princeton', $data);

        // -------------------- DOMPDF---
        $options = new Options();
        $options->setIsRemoteEnabled(true);
        $options->isHtml5ParserEnabled(true);
        $dompdf = new Dompdf($options);

        $dompdf->loadHtml($html);
        // (Optional) Setup the paper size and orientation
        $dompdf->setPaper('F4', 'potrait');
        // Render the HTML as PDF
        $dompdf->render();
        // Output the generated PDF to Browser
        $dompdf->stream("nex1", array("Attachment" => false));
        //return redirect()->to('/app/index');
    }

    public function print_otago()
    {

        $data = ($this->cache->get('cache_item_full'));
        $html = view('/CV-template/otago', $data);

        // -------------------- DOMPDF---
        $options = new Options();
        $options->setIsRemoteEnabled(true);
        $options->isHtml5ParserEnabled(true);
        $dompdf = new Dompdf($options);

        $dompdf->loadHtml($html);
        // (Optional) Setup the paper size and orientation
        $dompdf->setPaper('F4', 'potrait');
        // Render the HTML as PDF
        $dompdf->render();
        // Output the generated PDF to Browser
        $dompdf->stream("nex1", array("Attachment" => false));
        //return redirect()->to('/app/index');
    }

    public function print_berkeley()
    {

        $data = ($this->cache->get('cache_item_full'));
        $html = view('/CV-template/berkeley', $data);

        // -------------------- DOMPDF---
        $options = new Options();
        $options->setIsRemoteEnabled(true);
        $options->isHtml5ParserEnabled(true);
        $dompdf = new Dompdf($options);

        $dompdf->loadHtml($html);
        // (Optional) Setup the paper size and orientation
        $dompdf->setPaper('F4', 'potrait');
        // Render the HTML as PDF
        $dompdf->render();
        // Output the generated PDF to Browser
        $dompdf->stream("nex1", array("Attachment" => false));
        //return redirect()->to('/app/index');
    }

    public function print_harvard()
    {

        $data = ($this->cache->get('cache_item_full'));
        $html = view('/CV-template/harvard', $data);

        // -------------------- DOMPDF---
        $options = new Options();
        $options->setIsRemoteEnabled(true);
        $options->isHtml5ParserEnabled(true);
        $dompdf = new Dompdf($options);

        $dompdf->loadHtml($html);
        // (Optional) Setup the paper size and orientation
        $dompdf->setPaper('F4', 'potrait');
        // Render the HTML as PDF
        $dompdf->render();
        // Output the generated PDF to Browser
        $dompdf->stream("nex1", array("Attachment" => false));
        //return redirect()->to('/app/index');
    }
}
