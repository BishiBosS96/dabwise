 <!DOCTYPE html>
<!--[if lte IE 6]><html class="preIE7 preIE8 preIE9"><![endif]-->
<!--[if IE 7]><html class="preIE8 preIE9"><![endif]-->
<!--[if IE 8]><html class="preIE9"><![endif]-->
<!--[if gte IE 9]><!--><html><!--<![endif]-->
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="viewport" content="width=device-width,initial-scale=1">
        <title>title</title>
        <meta name="author" content="name">
        <meta name="description" content="description here">
        <meta name="keywords" content="keywords,here">
        <meta name="csrf-token" content="{{ csrf_token() }}">
    </head>
    <body>
    	<div class="container-fluid" id="app">
    		@{{results}}
    	</div>
     <script src="https://cdn.jsdelivr.net/npm/vue@2.5.16/dist/vue.js"></script>
     <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
     <script>
        let time = undefined
        let vue = new Vue({
            el: '#app',
            methods:{
                callme:function(value, total){
                    var ref = this
                    if(value==total){
                        clearInterval(time)
                        window.open("/excel", "_blank")
                        return true;
                    }else{
                        axios.post("{{route('gass')}}", { currVal : this.@php echo($rand) @endphp[value]})
                        .then(function(res){
                            ref.results.push(res.data.result)
                            ref.numb++
                            ref.callme(ref.numb, total)
                        }).catch(function(err){})  
                    }
                    
                },
                getData:function(){
                    this.callme(this.numb,  @php echo(sizeof($entidades)) @endphp)
                },
            },
            data:{
                numb: 0,
                results: [],
                "{{$rand}}" : [
                    @foreach($entidades as $entidad)
                        "{{base64_encode($entidad->EntidadFederativaId)}}",
                    @endforeach
                ],

            },
            mounted:function(){
                this.callme(this.numb,  @php echo(sizeof($entidades)) @endphp)
            }
        })
     </script>
    </body>
</html>
