@extends('C1119b.layouts')


@section('content')

    <p>
    @if($name == 'zxwtry')
        I'm zxwtry
    @elseif($name == 'zxwtry01')
        I'm zxwtry01
    @else
        I'm default_zxwtry
    @endif
    </p>


    <p>
    @if (in_array($name, $arr))
        $name 在 $arr中
    @else
        $name 不在 $arr中
    @endif
    </p>


    <!-- unlelss相当于if的取反 -->
    <p>
    @unless($name == 'zxwtry')
        I'm not zxwtry
    @endunless
    </p>


    <p>
    @for ($i = 0; $i < 10; $i ++)
        {{ $i  }}
    @endfor
    </p>

    <p>
        @foreach($students as $student)
            {{$student->name  }}
        @endforeach
    </p>

    <p>
        @forelse($students as $student)
            {{--如果数组里面有数据，执行这里--}}
            {{$student->name  }}
        @empty
            {{--如果数组是[]，执行这里--}}
            这里没有任何数据
        @endforelse

    </p>



@stop
