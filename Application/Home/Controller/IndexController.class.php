<?php

namespace Home\Controller;

use Think\Controller;

class IndexController extends Controller {
	public function index() {
		$this->show ( '', 'utf-8' );
		$array = array (
				45,
				1,
				56,
				42,
				36,
				75,
				16,
				459,
				5621,
				324,
				58789 
		);
		$tt = $array [0];
		foreach ( $array as $ky => $vale ) {
			if ($ky == 0)
				continue;
			$tt .= ':' . $vale;
		}
		foreach ( $array as $key => $value ) {
			foreach ( $array as $key1 => $value1 ) {
				if ($key1 == 0)
					continue;
				if ($array [$key1] < $array [$key1 - 1]) {
					$t = $array [$key1 - 1];
					$array [$key1 - 1] = $array [$key1];
					$array [$key1] = $t;
				}
			}
		}
		$ff = $array [0];
		foreach ( $array as $ky => $vale ) {
			if ($ky == 0)
				continue;
			$ff .= ':' . $vale;
		}
		$this->view->assign ( 'ff', $ff );
		$this->view->assign ( 'tt', $tt );
		$info = '测试信息';
		trace ( $info, '提示' );
		trace ( $info, '提示' );
		// $Blog = D("Blog");
		// $blog = $Blog->find(3);
		// dump($blog);
		$user = M ( 'user' );
		$user->name = 'save';
		$user->age = 30;
		$data['name'] = 'data';
		$data['age'] = 50;
		$num = $user->add ();
		$user->add($data);
		$user->where('id=1')->save($data);
		$user->where("id=$num")->delete();
		$list = $user->where ( 'id = 1' )->limit ( 10 )->order ( 'id' )->select ();
		dump ( $list, true, null, false );
		$this->display ();
	}
}