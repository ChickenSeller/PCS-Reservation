@extends('layouts.admin_base')

@section('content')
  <div class="a-content">
    <h1 class="content-heading">DashBoard</h1> 
    <div class="inner">
        <table class="table Ttable">
            <tr>
                <th>date</th>
                <th class="desc">description</th>
                <th>status</th>
                <th></th>
            </tr>

            <!-- [TODO] for loop to show order info -->

            <tr style="width:50px">
                <td>xxx1</td>                
                <td class="desc">xxxxxxxxxxxxxxxxx xxxxxx xxxxxx3</td>                
                <td>xxx2</td>               
                 <!-- [TODO] link using <a> -->
                <td><button class="btn">detail</button></td>                
            </tr>
            <tr>
                <td>xxx1</td>                
                <td class="desc">xxx3</td>                
                <td>xxx2</td>                
                <td><button class="btn">detail</button></td>                
            </tr>
            <tr>
                <td>xxx1</td>                
                <td class="desc">xxx3</td>                
                <td>xxx2</td>                
                <td><button class="btn">detail</button></td>                
            </tr>
            <tr>
                <td>xxx1</td>                
                <td class="desc">xxx3</td>              
                <td>xxx2</td>                
                <td><button class="btn">detail</button></td>                
            </tr>
        </table>

    </div>
  </div>
@stop
