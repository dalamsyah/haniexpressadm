@extends('layouts.app')


@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Report</h2>
        </div>
    </div>
</div>

<br>
@if ($message = Session::get('success'))
    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>
@endif

@if ($message = Session::get('warning'))
    <div class="alert alert-warning">
        <p>{{ $message }}</p>
    </div>
@endif

<div class="row">
    <div class="col-3">
        <div class="form-group">
            <h3>Pemilik H. Abduh</h3>
        </div>
    </div>
</div>



{!! Form::open(array('route' => 'report.index','method'=>'GET')) !!}

<div class="row">


    <div class="col-xs-3 col-sm-3 col-md-3">
        <div class="form-group">
            <strong>Cabang:</strong>
            <select name="cabang" class="form-control custom-select">
                <option value="">Pilih cabang</option>
            @foreach($cabangs as $cabang)
                <option value="{{ $cabang->cabang }}" 
                    @if ( app('request')->input('cabang') == $cabang->cabang )
                        selected="selected"
                    @endif >{{ $cabang->cabang }}</option>
            @endforeach
        </select>
        </div>
    </div>

    <div class="col-xs-3 col-sm-3 col-md-3">
        <div class="form-group">
            <strong>Cara pembayaran:</strong>
            <select name="cara_pembayaran" class="form-control custom-select">
                <option value="">Pilih cara pembayaran</option>
                <option value="TAGIH" @if(app('request')->input('cara_pembayaran') == "TAGIH" ) selected="selected" @endif >TAGIH</option>
                <option value="FRANCO" @if(app('request')->input('cara_pembayaran') == "FRANCO" ) selected="selected" @endif >FRANCO</option>
                <option value="LUNAS" @if(app('request')->input('cara_pembayaran') == "LUNAS" ) selected="selected" @endif >LUNAS</option>
        </select>
        </div>
    </div>

</div>

<div class="row">
    <div class="col-xs-3 col-sm-3 col-md-3">
        <div class="form-group">
            <strong>Tanggal awal:</strong>

            <div class="input-group date">
                <div class="input-group-addon">
                    <span class="glyphicon glyphicon-th"></span>
                </div>
                <input placeholder="Pilih tanggal" type="date" value="{{ app('request')->input('tanggal_awal')  }}" class="form-control datepicker" name="tanggal_awal">
            </div>

        </div>
    </div>  

    <div class="col-xs-3 col-sm-3 col-md-3">
        <div class="form-group">
            <strong>Tanggal akhir:</strong>

            <div class="input-group date">
                <div class="input-group-addon">
                    <span class="glyphicon glyphicon-th"></span>
                </div>
                <input placeholder="Pilih tanggal" type="date" value="{{ app('request')->input('tanggal_akhir')  }}" class="form-control datepicker" name="tanggal_akhir">
            </div>

        </div>
    </div>

    <div class="col-xs-1 col-sm-1 col-md-1" style="">
        <div class="form-group" style="margin-top: 23px">
            <input name="check_tanggal" class="form-check-input" type="checkbox" value="checked" id="flexCheckDefault" {{ app('request')->input('check_tanggal')  }}>
            <label class="form-check-label" for="flexCheckDefault">
                Gunakan tanggal
            </label>
        </div>
    </div>
</div>

<div class="row">

    <div class="col-3">
        <div class="form-group">
            {!! Form::text('search', app('request')->input('search'), array('placeholder' => 'Cari no resi','class' => 'form-control')) !!}
        </div>
    </div>

    <div class="col-2">
        <div class="form-group">
            <button type="submit" target="_blank" class="btn btn-success form-control" style="margin-top: 0px">Cari</button>
        </div>
    </div>

</div>

{!! Form::close() !!}

<div class="row">
    <div class="col-12">
        <h3>Total qty barang: {{ number_format($total_qty) }} </h3>
    </div>
    <div class="col-12">
        <h3>Total berat barang: {{ number_format( $total_berat) }}</h3>
    </div>
    <div class="col-12">
        <h3>Total biaya barang: Rp {{ number_format( $total_biaya ) }}</h3>
    </div>
</div>
<br>

{{-- {!! Form::open(array('route' => 'print.addDataPrint','method'=>'POST')) !!}

    <div class="row">
        
        <div class="col-3">
            <div class="form-group">
                {!! Form::text('search', app('request')->input('search'), array('placeholder' => 'Cari','class' => 'form-control')) !!}
            </div>
        </div>

    </div>

{!! Form::close() !!} --}}

<table class="table table-bordered">
 <tr>
    <th>No.</th>
    <th>Cabang</th>
    <th>No. Resi</th>
    <th>Cara Pembayaran</th>
    <th>Total Jumlah Barang</th>
    <th>Total Berat Barang</th>
    <th>Total Biaya Barang</th>
    <th>Dibuat Tgl</th>
 </tr>
 @forelse ($datas as $data)
  <tr>
    <td>{{ ++$i }}.</td>
    <td>{{ $data->cabang }}</td>
    <td>{{ $data->no_resi }}</td>
    <td>{{ $data->cara_pembayaran }}</td>
    <td>{{ number_format( $data->total_qty ) }}</td>
    <td>{{ number_format( $data->total_berat ) }}</td>
    <td>Rp {{ number_format( $data->total_biaya ) }}</td>
    <td>{{ $data->created_at }}</td>
  </tr>
@empty
     <tr>
         <td colspan="12">
             <p style="text-align: center">Data Tidak Ada!</p>
         </td>
     </tr>
@endforelse
</table>

{{ $datas->links('layouts.pagination') }}

{{--{!! $datas->render() !!}--}}
{{--{{ $datas->links() }}--}}

<script>
    $(document).ready(function() {

        // console.log($(".datepicker").val());
        // $(".datepicker").datepicker({
        //     format: 'yyyy-mm-dd',
        //     autoclose: true,
        //     todayHighlight: true,
        // });

    });
</script>

@endsection
