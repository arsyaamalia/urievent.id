<?php 
namespace App\Filters;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\Filters\FilterInterface;

//Biar ga bisa balik ke page sign sebelum logout 

class SignBack implements FilterInterface
{
    public function before(RequestInterface $request, $arguments = null)
    {
        if (session()->get('isLoggedIn'))
        {
            return redirect()->to('/pages');
        }
    }
    
    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
    {
        
    }
}