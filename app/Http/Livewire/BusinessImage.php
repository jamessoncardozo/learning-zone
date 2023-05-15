<?php

namespace App\Http\Livewire;
use Spatie\Browsershot\Browsershot;

use Livewire\Component;
use App\Models\User;
use HeadlessChromium\BrowserFactory;

use Illuminate\Support\Facades\Request;


class BusinessImage extends Component
{ 
  public $id_user;

  public function mount($id){
    
    $this->id_user = $id;
  }


  public function render(){ 
    
    
    $browserFactory = new BrowserFactory('chromium-browser');

    $browser = $browserFactory->createBrowser();

    try {
        $page = $browser->createPage();
        $page->navigate('https://www.bbc.co.uk/')->waitForNavigation();
        dd($page->screenshot()->saveToFile(storage_path() . '/php_chrome_screenshot.png'));
    } finally {
        $browser->close();
    }


    $user = User::find($this->id_user);
    $shot_path ="img\\cards\\".$user->user_name.".png";
    
    Browsershot::url('https://www.itsolutionstuff.com')
            ->setOption('landscape', true)
            ->windowSize(3840, 2160)
            ->waitUntilNetworkIdle()
            ->save('itsolutionstuff.jpg');



    return view('livewire.business-image',['user' => $user]);

  }

}