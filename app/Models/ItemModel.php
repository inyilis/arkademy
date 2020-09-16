<?php  
	//Model
	namespace App\Models;
	use Illuminate\Support\Facades\DB;

	class ItemModel{
		public static function get_all(){
			$items = DB::table('items')->get();
			return $items;
		}

		public static function save($data){
			$new_item = DB::table('items')->insert($data);
			return $new_item;
		}

		public static function find_by_id($id){
			$items = DB::table('items')->where('id', $id)->first();
			return $items;
		}

		public static function update($id, $req){
			$items = DB::table('items')
						->where('id', $id)
						->update([
							'name' => $req["name"],
							'description' => $req["description"],
							'price' => $req["price"],
							'stock' => $req["stock"],
						]);
			return $items;
		}

		public static function destroy($id){
			$delete = DB::table('items')->where('id', $id)->delete();
			return $delete;
		}
	}

?>