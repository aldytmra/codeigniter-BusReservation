<?php

class Model_bus extends CI_Model {
    public function searchAvailableBus($from, $to) {
            // $availableBus = $this->db->query('SELECT
            //         bus.busNo,
            //         bus.numberOfSeat,
            //         journey.routeNo,
            //         journey.departureTime,
            //         journey.arrivalTime,
            //         journey.price,
            //         journey.journeyNo
            //         FROM journey
            //         JOIN journey_for_bus ON journey.journeyNo = journey_for_bus.journeyNo
            //         JOIN bus ON journey_for_bus.busNo = bus.busNo  
            //         WHERE journey.journeyFrom ="' . $from . '" AND journey.journeyTo ="' . $to . '" ');
        //     $availablebus = $this->db->select('')
            $availableBus = $this->db->select('bus.busNo, bus.numberOfSeat, j.routeNo, j.departureTime, j.arrivalTime, j.price, j.journeyNo')
            ->from('journey j')
            ->join('journey_for_bus jfbus', 'j.journeyNo = jfbus.journeyNo')
            ->join('bus bus','jfbus.busNo = bus.busNo')
            ->where('j.journeyFrom', $from)
            ->where('j.journeyTo', $to)->get();
            return $availableBus;

    }

    public function insertDataBooker(){
        $this->db->insert('seats', $data);
		// parameter ke 2 adalah value parameter pertama adalah value dari filternya
		// untuk mengecek berhasil sudah disimpan atau belum
		return $this->db->insert_id();
		// insert id untuk mengembalikan nilai ID terakhir yg baru dsimpan yaitu untuk memberikan pesan sukses disimpan
    }

    public function searchAllBus(){
        return $this->db->get('bus'); 
    }

    public function scheduleall(){
        return $this->db->get('journey'); 
    }

}