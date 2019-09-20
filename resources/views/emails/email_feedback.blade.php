@extends('emails.order-related-main')
@section('content')
    <div class="movableContent" style="border: 0px; padding-top: 0px; position: relative;">
        <table width="100%" border="0" cellspacing="0" cellpadding="0" align="center">
            <tr>
                <td align='left'>
                    <div class="contentEditableContainer contentTextEditable">
                        <div class="contentEditable" align='center'>

                        </div>
                    </div>
                </td>
            </tr>
            <tr>
                <td height='15'></td>
            </tr>
            <tr>
                <td align='left'>
                    <div class="contentEditableContainer contentTextEditable">
                        <div class="contentEditable" align='center' style='padding-bottom: 5px;'>
                            A complaint has been logged from {!! $user_name !!}, {!! $phone !!}, <br><br>
                            {{ $description }}
                        </div>
                    </div>
                </td>
            </tr>
            @foreach($images as $key => $val)
                <tr>
                    <td height='15'></td>
                </tr>
                <tr>
                    <td>
                        <img src="{!! asset($val) !!}" alt="{!! asset($val) !!}"/>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
@stop
