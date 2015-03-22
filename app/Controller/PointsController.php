<?php
App::uses('AppController', 'Controller');
/**
 * Points Controller
 *
 * @property Point $Point
 * @property PaginatorComponent $Paginator
 */

class PointsController extends AppController {

	

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator');

/**
 * leaderboard method
 * 
 * @var $type = string: 'semester' or 'month' or 'all_time'
 */
	public function leaderboard($type){
		if($type=='month')
			$result= $this->Point->find('all', array('order' => array('Point.month' => 'asc'), 'limit'=> 10 ); 
		
		elseif($type=='semester')
			$result= $this->Point->find('all', array('order' => array('Point.semester' => 'asc'), 'limit'=> 10 );
			
		elseif($type=='all_time')
			$result= $this->Point->find('all', array('order' => array('Point.total' => 'asc'), 'limit'=> 10 );
			
		else
			$result='esa no existe tarado'; 
		$this->set('board', $result);
	}
/**
*Modifica el puntaje del asesor en todos los fields (month, semester, total)
*upvote de answer es +1 punto, downvote es -1 punto, una recomendacion es +3 puntos
*usar en los botones de upvote, downvote y recomendar asesor. 
*@var $tutor_id = int: el user_id del tutor al que corresponde. 
*@var $type = string: 'recommendation' o 'upvote answer' o 'downvote answer'
*/
	public function plus_recommend_or_like($tutor_id, $type){
		$this->autoRender = false;
		if(!$this->request->is('ajax'))
			return false;
		$point = $this->Point->findByUserId($tutor_id);
		if(!$point)
			return false;
		$total = $point['Point']['total'];
		$month = $point['Point']['month'];
		$semester = $point['Point']['semester'];
		$this->Point->id = $point['Point']['id'];
		if($type=='recommendation'){ 
			$this->Point->saveField('total', $total+3);
			$this->Point->saveField('month', $month+3);
			$this->Point->saveField('semester', $semester+3);
		}
		elseif($type=='upvote answer'){
			$this->Point->saveField('total', $total+1);
			$this->Point->saveField('month', $month+1);
			$this->Point->saveField('semester', $semester+1);
		}
		elseif($type=='downvote answer'){
			$this->Point->saveField('total', $total-1);
			$this->Point->saveField('month', $month-1);
			$this->Point->saveField('semester', $semester-1);
		}
		else
			return false;
		return json_encode(array("code"=>200, 'message'=>'success')); //ese "code" si lleva comillas dobles?
	}




/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Point->recursive = 0;
		$this->set('points', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Point->exists($id)) {
			throw new NotFoundException(__('Invalid point'));
		}
		$options = array('conditions' => array('Point.' . $this->Point->primaryKey => $id));
		$this->set('point', $this->Point->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Point->create();
			if ($this->Point->save($this->request->data)) {
				$this->Session->setFlash(__('The point has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The point could not be saved. Please, try again.'));
			}
		}
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Point->exists($id)) {
			throw new NotFoundException(__('Invalid point'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Point->save($this->request->data)) {
				$this->Session->setFlash(__('The point has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The point could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Point.' . $this->Point->primaryKey => $id));
			$this->request->data = $this->Point->find('first', $options);
		}
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Point->id = $id;
		if (!$this->Point->exists()) {
			throw new NotFoundException(__('Invalid point'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Point->delete()) {
			$this->Session->setFlash(__('The point has been deleted.'));
		} else {
			$this->Session->setFlash(__('The point could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
