<?php
    namespace app\http\controllers\Order;
    use Illuminate\Routing\Controller;
    use App\Model\IndexModel;
    class OrderController extends Controller {
        public function order($id){
            //echo __METHOD__;
            $user =IndexModel::where(['id'=>$id])->first()->toArray();
            print_r($user);
            echo $id;
        }

        public function insert(){

            $data=[
                'uname'=>str_random(5),
                'usex'=>'男',
                'uema'=>'9493205@qq.com',
                'utel'=>'951954',
            ];
            $res=IndexModel::insert($data);
        }

        public function update($uid){
            $data=[
                'usex'=>'女',
            ];
            $res=IndexModel::where(['id'=>$uid])->update($data);
        }

        public function delete($uid){
            $where=[
                'id'=>$uid,
            ];
            $res=IndexModel::where($where)->delete();
        }

        public function list(){
            $list=IndexModel::all();
            $data=[
                'list'=>$list,
            ];
            return view('order.list',$data);
        }
        public function test(){
            echo '111';
        }
    }