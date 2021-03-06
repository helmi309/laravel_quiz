@extends('layouts.app')

@section('content')
    <h3 class="page-title">Lihat Hasil Ujian</h3>

    <div class="panel panel-default">
        <div class="panel-heading">
            @lang('quickadmin.list')
        </div>

        <div class="panel-body">
            <table class="table table-bordered table-striped {{ count($results) > 0 ? 'datatable' : '' }}">
                <thead>
                    <tr>
                    @if(Auth::user()->isAdmin())
                        <th>@lang('quickadmin.results.fields.user')</th>
                    @endif
                        <th>Course</th>
                        <th>Tanggal Kuis</th>
                    @if(Auth::user()->isAdmin())    
                        <th>Jawaban</th>
                    @endif    
                        <th>Nilai</th>
                        <th>&nbsp;</th>
                    </tr>
                </thead>

                <tbody>
                    @if (count($results) > 0)
                        @foreach ($results as $result)
                            <tr>
                            @if(Auth::user()->isAdmin())
                                <td>{{ $result->user->name or '' }} ({{ $result->user->email or '' }})</td>
                            @endif
                                <td>{{ $result->nama_topics or '' }}</td>
                                <td>{{ $result->created_at or '' }}</td>
                            @if(Auth::user()->isAdmin())
                                <td>{{ $result->result }}/{{ $result->hitung }}</td>
                            @endif
                                <td>
                                @if ($result->score == NULL)
                                    0 
                                @else
                                    {{$result->score}}
                                @endif
                                </td>
                                <td>
                                    <a href="{{ route('results.show',[$result->id]) }}" class="btn btn-xs btn-primary">@lang('quickadmin.view')</a>
                                </td>
                            </tr>
                        @endforeach
                    @else
                        <tr>
                            <td colspan="6">@lang('quickadmin.no_entries_in_table')</td>
                        </tr>
                    @endif
                </tbody>
            </table>
        </div>
    </div>
@stop
