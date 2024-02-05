<?php
    class attendanceList {
        public function testTanaka($data) {
            // jsonを配列に変換
            $data1 = json_decode($data);
        
            // 配列、田中を定義
            $tanaka = array('name' => 'tanaka');
            // 配列に変換した受け取った値に田中を挿入
            array_push($data1, $tanaka);
            
            // json形式にエンコード
            $data1 = json_encode($data1);
        
            // 値の戻し
            return $data1;
        }

        public function testSuzuki($data) {
            $data1 = json_decode($data);
        
            $suzuki = array('name' => 'suzuki');
            array_push($data1, $suzuki);
            
            $data1 = json_encode($data1);
        
            return $data1;
        }
    }

?>