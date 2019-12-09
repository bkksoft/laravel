<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class GuideInvoiceModel extends Model
{
    protected $table = 'guides_invoices';
    public $primaryKey = 'id';
    public $itemstamps = false;
    public $maxlimit = 24;


    // public $fields = ['*'];

    protected $fillable = ['title'];

    protected $hidden = [];

    # get: Data form database
    public function get($id){

        $sth = DB::table( $this->table );

        // $sth->select( $this->fillable );

        // set condition

        $sth->where($this->primaryKey, '=', $id );
        $sth->where( 'status', '=', 1 );

        $results = $sth->first();

        $arr = [];

        if( !empty($results) ){
            $arr['data'] = $this->convert($results);
        }

        return $arr;
    }

    public function find($request)
    {
        # set options
        $ops = array(
            'limit' => intval(isset($request->limit)? $request->limit: 24),
            'page' => intval(isset($request->page)? $request->page: 1),

            'ts' => time(),
        );

        if($ops['limit'] >= $this->maxlimit){
            $ops['limit'] = $this->maxlimit;
        }

        # connect DB
        $sth = DB::table( $this->table );

        # set select: fields


        # set condition 
       

        if( !empty($request->q) ){
            $sth->where( 'title', 'LIKE', "{$request->q}%" );
        }

        # set sort data
        if( $request->has('sort') ){
           
        }
        else{
            $sth->orderby( 'updated_at', 'desc' );
            $sth->orderby( 'title', 'asc' );
        }

        $sth->skip( ($ops['page']*$ops['limit'])- $ops['limit']);
        $sth->take( $ops['limit'] );

        # get results
        $results = $sth->paginate($ops['limit']);

        # response
        $ops['total'] = $results->total();


        $paramquery = http_build_query([
            'limit' => $ops['limit'],
        ]);

        if( !empty($this->uri) ){
            if( ($ops['page']*$ops['limit']) < $ops['total']  ){
                $ops['next'] = asset( $this->uri. '?page='.($ops['page']+1).'&'.$paramquery );
            }

            if($ops['page']>1){
                $ops['prev'] = asset( $this->uri. '?page='.($ops['page']-1).'&'.$paramquery);
            }
        }

        return [
            'options'   => $ops,
            'data'      => $this->buildFrag($results->items()),
        ];
    }


    # convert: Data
    public function buildFrag($results, $options=[]) {
        $data = [];
        foreach ($results as $key => $value) { if( empty($value) ) continue; $data[] = $this->convert( $value ); }
        return $data;
    }
    public function convert($data){

        return $data;
    }

}
