@extends('layouts.app')

@section('title','Log Aktivitas')

@section('content')

<div class="card" style="
    border: 3px solid #000000;
    border-radius: 20px;
    padding: 30px;
    background-color: #ffffff;
    box-shadow: 5px 5px 0px #000000;
    margin: 20px;
">

    <div style="
    display:flex;
    justify-content:space-between;
    align-items:center;
    margin-bottom:25px;
    ">
        <div>
            <h2 style="font-weight: bold; color: #000000; margin: 0;">Log Aktivitas</h2>
        </div>
    </div>

    <table width="100%" style="
    border-collapse:collapse;
    border: 2px solid #000000;
    background-color: #f9f9f9;
    ">

        <thead>
            <tr style="
            background: #7c3aed;
            color: white;
            border-bottom: 2px solid #000000;
            ">
                <th style="padding:15px; text-transform: uppercase; font-size: 14px; border-right: 2px solid #000000; text-align: center; width: 60px;">No</th>
                <th style="padding:15px; text-transform: uppercase; font-size: 14px; border-right: 2px solid #000000; text-align: left; width: 180px;">User</th>
                <th style="padding:15px; text-transform: uppercase; font-size: 14px; border-right: 2px solid #000000; text-align: left;">Aktivitas</th>
                <th style="padding:15px; text-transform: uppercase; font-size: 14px; text-align: center; width: 200px;">Tanggal</th>
            </tr>
        </thead>

        <tbody>
        @foreach($logs as $log)
            <tr style="border-bottom: 2px solid #000000;">

                <td style="padding:15px; border-right: 2px solid #000000; text-align: center; color: #000000; vertical-align: middle;">
                    {{ $loop->iteration }}
                </td>

                <td style="padding:15px; border-right: 2px solid #000000; color: #000000; font-weight: bold; vertical-align: middle;">
                    {{ $log->user->nama }}
                </td>

                <td style="padding:15px; border-right: 2px solid #000000; color: #334155; vertical-align: middle; line-height: 1.5;">
                    {{ $log->aktivitas }}
                </td>

                <td style="padding:15px; text-align: center; color: #64748b; font-size: 13px; vertical-align: middle;">
                    {{ $log->created_at }}
                </td>

            </tr>
        @endforeach
        </tbody>

    </table>

</div>

@endsection