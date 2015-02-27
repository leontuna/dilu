<div class="panel-group category-products" id="accordian"><!--category-productsr-->
    <h2>Categoria</h2>
  <!-- <div class="panel panel-default">
        <div class="panel-heading">
            <h4 class="panel-title">
                <a data-toggle="collapse" data-parent="#accordian" href="#sportswear">
                    <span class="badge pull-right"><i class="fa fa-plus"></i></span>
                    Sportswear
                </a>
            </h4>
        </div>
        <div id="sportswear" class="panel-collapse collapse">
            <div class="panel-body">
                <ul>
                    <li><a href="">Nike </a></li>
                    <li><a href="">Under Armour </a></li>
                    <li><a href="">Adidas </a></li>
                    <li><a href="">Puma</a></li>
                    <li><a href="">ASICS </a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="panel panel-default">
        <div class="panel-heading">
            <h4 class="panel-title">
                <a data-toggle="collapse" data-parent="#accordian" href="#mens">
                    <span class="badge pull-right"><i class="fa fa-plus"></i></span>
                    Mens
                </a>
            </h4>
        </div>
        <div id="mens" class="panel-collapse collapse">
            <div class="panel-body">
                <ul>
                    <li><a href="">Fendi</a></li>
                    <li><a href="">Guess</a></li>
                    <li><a href="">Valentino</a></li>
                    <li><a href="">Dior</a></li>
                    <li><a href="">Versace</a></li>
                    <li><a href="">Armani</a></li>
                    <li><a href="">Prada</a></li>
                    <li><a href="">Dolce and Gabbana</a></li>
                    <li><a href="">Chanel</a></li>
                    <li><a href="">Gucci</a></li>
                </ul>
            </div>
        </div>
    </div> -->
    @foreach(Type::all() as $type)
        <div class="panel panel-default" style="margin-top: 0px;">
            <div class="panel-heading" style="padding: 10px 15px;">
                <h6 class="panel-title"><a href="/product/type/{{$type->id}}" style="font-size: 12px;">{{$type->name}}</a></h6>
            </div>
        </div>
    @endforeach
</div><!--/category-products-->