@extends("default")

@section('content')

    <h1>{{$title}}</h1> <!-- Echappe au code HTML -->
    <!-- <h1>{!! $title!!}</h1> N'echappe pas : très utile !-->

    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent ornare tellus nec justo luctus, sit amet commodo enim dapibus. Aliquam at nisl a ante tempus vulputate. Morbi et enim augue. Phasellus dapibus, lectus vitae mattis dictum, mauris dui euismod lorem, eget feugiat eros magna luctus libero. Duis eleifend tempus ultrices. Curabitur non euismod eros, quis scelerisque erat. Vivamus tempor massa non purus porttitor egestas. Nunc cursus nunc et aliquam gravida. Integer vitae erat in justo pretium accumsan. Duis enim augue, ultricies id luctus vel, dictum eget elit. Nam fringilla ipsum lorem, sed accumsan metus ullamcorper vel. Vestibulum mi nulla, posuere a luctus quis, varius vitae nisl. Praesent non felis orci.</p>

@endsection


@section('footer')

    <h5>Mentions légales</h5>

@endsection