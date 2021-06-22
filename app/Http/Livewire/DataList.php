<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\DB;

use Livewire\WithPagination;
use App\Http\Livewire\Pagination;

class DataList extends Component
{
    use WithPagination, Pagination;

    public $table;
    public $data = array();
    public $listnum = 5;
    public $filter_forms;
    public $filter = []; // 필터 조건값
    public $search_status = false;

    public $modalFormVisible = false;
    public $mode = "list";

    public $title;
    public $_id;

    public $forms = [];

 

    public function mount()
    {

    }

    public function modalClose()
    {
        $this->modalFormVisible = false;
    }
    
    /**
     * create 모달창을 생성합니다.
     *
     * @return void
     */
    public function create()
    {
        $this->modalFormVisible = true;
        $this->mode = "new";
        $this->data = []; // 데이터 초기화
    }
    
    /**
     * insert 새로운 데이터를 삽입합니다.
     *
     * @return void
     */
    public function insert()
    {
        // 데이터를 DB에 삽입합니다.
        DB::table($this->table)->insert( $this->data );
        
        $this->modalFormVisible = false; //모달창을 제거 합니다.
        $this->mode = "list";
    }

    public function edit($id)
    {
        $this->_id = $id;
        
        // 데이터를 DB에서 읽어 옵니다.        
        $data = DB::table($this->table)->where('id', $id)->first();
        foreach($data as $key => $value) {
            $this->data[$key] = $value; // Obj -> Arr 변환
        }        

        $this->modalFormVisible = true; // 모달창을 생성 합니다.
        $this->mode = "edit";
    }

    
    public function update()
    {   
        // DB 데이터를 수정합니다.
        DB::table($this->table)
            ->where('id', $this->_id)
            ->update($this->data);
            
        $this->modalFormVisible = false; //모달창을 제거 합니다.
        $this->mode = "list";
    }

    public function delete()
    {
        // DB 데이터를 삭제합니다.
        DB::table($this->table)->where('id', $this->_id)->delete();

        $this->modalFormVisible = false; //모달창을 제거 합니다.
        $this->mode = "list";
    }

    public function search()
    {
        // 동작없음.
        // 페이지 재로드용
        $this->search_status = true;
    }

    public function search_reset()
    {
        $this->filter = [];
    }
    
    public function render()
    {
        $db = DB::table($this->table);
        foreach($this->filter as $key => $value) {
            if($value) {
                $db = $db->where($key, "like", "%".$value."%");
            }            
        }

        $rows = $db->orderBy('id',"desc")
            ->paginate($this->listnum); 
        return view('livewire.data-list',compact("rows"));
    }

    /**
     * Event Refresh
     */
    protected $listeners = ['refeshTable'];
    public function refeshTable()
    {

    }
}
