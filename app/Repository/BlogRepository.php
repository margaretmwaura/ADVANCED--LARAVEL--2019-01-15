<?php


namespace App\Repository;

use App\Models\Writeup;
use App\Repository\Interfaces\BlogRepositoryInterface;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Log;

class BlogRepository implements BlogRepositoryInterface
{
    public function all()
    {

//                return Writeup::all();
        return Cache::remember('blogs', 15, function() {
              return Writeup::all();
          });
    }
    public function getRecordById($id)
    {
        return Writeup::GetRecord($id);
    }
    public function find($id)
    {
        return Writeup::find($id);
    }
    public function deleteRecord($id)
    {
        $writeup = Writeup::find($id);
        Log::info("Data to be deleted " . $id);
        $writeup->delete();
//        Cache::forget('blogs');
        return true;
    }
    public function updateRecord(Request $request, $id)
    {
        $writeup=Writeup::find($id);

        try{
            $writeup->setTile($request->input('title'));
            $writeup->setMessage($request->input('message'));
            $writeup->setDate(\Carbon\Carbon::now());

            $writeup->save();
            Log::info("Data has been saved");
        }catch (\Exception $exception)
        {
            Log::info("An error was encounterd" .$exception->getMessage());
        }

//        Cache::forget('blogs');
    }
    public function storeRecord(Request $request, $id)
    {
        try {
            $onetodo=new Writeup();
            $onetodo->user_id=$id;
            Log::info("This is the data I have gotten " . $request[0] . " and the next " . $request[1]);
            $onetodo->setTile($request[0]);
            $onetodo->setMessage($request[1]);
            $onetodo->setDate(\Carbon\Carbon::now());
//            echo "The data " . $request->input('dob');
            $onetodo->save();

            Log::info("The data has been saved");
        } catch (\Exception $e) {
            Log::info("An error was encountered".$e->getMessage());
        }

        Cache::forget('blogs');
    }
}
