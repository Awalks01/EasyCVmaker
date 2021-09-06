<?php

namespace App\Controllers;

class App extends BaseController
{

    protected $session;
    protected $cache;

    public function __construct()
    {
        $this->session = \config\Services::session();
        $this->cache = \Config\Services::cache();
    }

    public function index()
    {
        return view('detail');
    }

    public function riwayat()
    {
        return view('pengalaman');
    }

    public function template()
    {
        return view('template');
    }

    public function test()
    {
        $data = $this->cache->get('cache_item_full');

        return view('test', $data);
    }

    public function create()
    {
        $image = \Config\Services::image();

        $file = $this->request->getFile('avatar');
        $name_avatar = $file->getName();
        $image->withFile($file);
        $image->fit(100, 100, 'center');
        $image->save('../public/avatar/' . $name_avatar);

        // die();
        // $file = $this->request->getFile('avatar');
        // $name_avatar = $file->getName();
        // $file->move('avatar');

        $data = [
            'avatar' => $name_avatar,
            'firstName' =>  $this->request->getPost('firstName'),
            'lastName' => $this->request->getPost('lastName'),
            'email' => $this->request->getPost('email'),
            'meta_phoneNumber' => $this->request->getPost('meta_phoneNumber'),
            'meta_streetName' => $this->request->getPost('meta_streetName'),
            'meta_postalCode' => $this->request->getPost('meta_postalCode'),
            'meta_city' => $this->request->getPost('meta_city'),
            'meta_dateOfBirth' => $this->request->getPost('meta_dateOfBirth'),
            'meta_placeOfBirth' => $this->request->getPost('meta_placeOfBirth'),
            'meta_drivingLicenses' => $this->request->getPost('meta_drivingLicenses'),
            'meta_gender' => $this->request->getPost('meta_gender'),
            'meta_nationality' => $this->request->getPost('meta_nationality'),
            'meta_maritalStatus' => $this->request->getPost('meta_maritalStatus'),
            'meta_linkedin' => $this->request->getPost('meta_linkedin'),
            'meta_website' => $this->request->getPost('meta_website')
        ];

        //$test = $this->request->getPost('firstName');

        //$this->session->set($data);
        $create = $this->cache->save('cache_item_id', $data, 10800);

        if ($create) {
            return redirect()->to('/app/riwayat');
        }
        //$cache->save('cache_item_id', $test);
        //dd($data);
        dd($this->cache->get('cache_item_id'));
    }

    public function create2()
    {

        $data2 = [
            'profile_description' => $this->request->getVar('profile_description'),
            'work_function' => [
                'item0' => [
                    $this->request->getVar('work_items0_function'),
                    $this->request->getVar('work_items0_city'),
                    $this->request->getVar('work_items0_employer'),
                    $this->request->getVar('work_items0_startMonth'),
                    $this->request->getVar('work_items0_startYear'),
                    $this->request->getVar('work_items0_endMonth'),
                    $this->request->getVar('work_items0_endYear')
                ],
                'item1' => [
                    $this->request->getVar('work_items1_function'),
                    $this->request->getVar('work_items1_city'),
                    $this->request->getVar('work_items1_employer'),
                    $this->request->getVar('work_items1_startMonth'),
                    $this->request->getVar('work_items1_startYear'),
                    $this->request->getVar('work_items1_endMonth'),
                    $this->request->getVar('work_items1_endYear'),
                ],
                'item2' => [
                    $this->request->getVar('work_items2_function'),
                    $this->request->getVar('work_items2_city'),
                    $this->request->getVar('work_items2_employer'),
                    $this->request->getVar('work_items2_startMonth'),
                    $this->request->getVar('work_items2_startYear'),
                    $this->request->getVar('work_items2_endMonth'),
                    $this->request->getVar('work_items2_endYear'),
                ],
            ],

            'education_name' => [
                'item0' => [
                    $this->request->getVar('education_items0_name'),
                    $this->request->getVar('education_items0_city'),
                    $this->request->getVar('education_items0_institution'),
                    $this->request->getVar('education_items0_startMonth'),
                    $this->request->getVar('education_items0_startYear'),
                    $this->request->getVar('education_items0_endMonth'),
                    $this->request->getVar('education_items0_endYear'),
                ],
                'item1' => [
                    $this->request->getVar('education_items1_name'),
                    $this->request->getVar('education_items1_city'),
                    $this->request->getVar('education_items1_institution'),
                    $this->request->getVar('education_items1_startMonth'),
                    $this->request->getVar('education_items1_startYear'),
                    $this->request->getVar('education_items1_endMonth'),
                    $this->request->getVar('education_items1_endYear'),
                ],
                'item2' => [
                    $this->request->getVar('education_items2_name'),
                    $this->request->getVar('education_items2_city'),
                    $this->request->getVar('education_items2_institution'),
                    $this->request->getVar('education_items2_startMonth'),
                    $this->request->getVar('education_items2_startYear'),
                    $this->request->getVar('education_items2_endMonth'),
                    $this->request->getVar('education_items2_endYear'),
                ],

            ],



            'hobby_name' => [
                'item0' => $this->request->getVar('hobby_items0_name'),
                'item1' => $this->request->getVar('hobby_items1_name'),
                'item2' => $this->request->getVar('hobby_items2_name'),
            ],

            'skill_name' => [
                'item0' => [
                    $this->request->getVar('skill_items0_name'),
                    $this->request->getVar('skill_items0_level')
                ],
                'item1' => [
                    $this->request->getVar('skill_items1_name'),
                    $this->request->getVar('skill_items1_level')
                ],
                'item2' => [
                    $this->request->getVar('skill_items2_name'),
                    $this->request->getVar('skill_items2_level')
                ],

            ],

            'availability_description' => $this->request->getVar('availability_description')
        ];



        // $profile_description = $this->request->getVar('profile_description');
        // $work_function = $this->request->getVar('work_items0_function');
        // $work_city = $this->request->getVar('work_items0_city');
        // $work_employer = $this->request->getVar('work_items0_employer');
        // $work_startMonth = $this->request->getVar('work_items0_startMonth');
        // $work_startYear = $this->request->getVar('work_items0_startYear');
        // $work_endMonth = $this->request->getVar('work_items0_endMonth');
        // $work_endYear = $this->request->getVar('work_items0_endYear');
        // $education_name = $this->request->getVar('education_items0_name');
        // $education_startMonth = $this->request->getVar('education_items0_startMonth');
        // $education_startYear = $this->request->getVar('education_items0_startYear');
        // $education_endMonth = $this->request->getVar('education_items0_endMonth');
        // $education_endYear = $this->request->getVar('education_items0_endYear');
        // $hobby_name = $this->request->getVar('hobby_items0_name');
        // $skill_name = $this->request->getVar('skill_items0_name');
        // $kill_level = $this->request->getVar('skill_items0_level');
        // $availability_description = $this->request->getVar('availability_description');


        //$test = $this->request->getPost('firstName');
        //$test = $this->request->getPost('profile.description');
        //$this->session->set($data);
        $create2 = $this->cache->save('cache_item_id_2', $data2, 10800);
        if ($create2) {
            return redirect()->to('/app/view');
        }
        dd($this->cache->get('cache_item_id_2'));
        //$cache->save('cache_item_id', $test);
        // return redirect()->to('/app/view');

        //dd($test);

        //echo ($test['b']['b1']);
    }

    public function view()
    {
        $personal = $this->cache->get('cache_item_id');
        $riwayat = $this->cache->get('cache_item_id_2');

        $data = [
            'avatar' => $personal['avatar'],
            'firstName' =>  $personal['firstName'],
            'lastName' => $personal['lastName'],
            'email' => $personal['email'],
            'meta_phoneNumber' => $personal['meta_phoneNumber'],
            'meta_streetName' => $personal['meta_streetName'],
            'meta_postalCode' => $personal['meta_postalCode'],
            'meta_city' => $personal['meta_city'],
            'meta_dateOfBirth' => $personal['meta_dateOfBirth'],
            'meta_placeOfBirth' => $personal['meta_placeOfBirth'],
            'meta_drivingLicenses' => $personal['meta_drivingLicenses'],
            'meta_gender' => $personal['meta_gender'],
            'meta_nationality' => $personal['meta_nationality'],
            'meta_maritalStatus' => $personal['meta_maritalStatus'],
            'meta_linkedin' => $personal['meta_linkedin'],
            'meta_website' => $personal['meta_website'],

            'profile_description' => $riwayat['profile_description'],
            'work_function' => $riwayat['work_function'],

            'education_name' => $riwayat['education_name'],

            'hobby_name' => $riwayat['hobby_name'],
            'skill_name' => $riwayat['skill_name'],

            'availability_description' => $riwayat['availability_description']

        ];

        $createfull = $this->cache->save('cache_item_full', $data, 10800);

        if ($createfull) {
            return redirect()->to('/app/template');
        }
        //dd($this->cache->get('cache_item_full'));
        //$this->cache->delete('cache_item_id');
        //$this->cache->delete('cache_item_id_2');

        //dd($data['work_function']);
        //$data = $this->cache->get('cache_item_full');

        //return redirect()->to('/app/template');
    }
}
