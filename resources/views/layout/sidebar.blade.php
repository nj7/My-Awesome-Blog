            <div class="col-md-4">
                <aside class="right-sidebar">
                <!--Widget class for showing the post by categories -->
                    <div class="widget">
                        <div class="widget-heading">
                            <h4>Categories</h4>
                        </div>
                        <div class="widget-body">
                            <ul class="categories">
                                
                                @foreach($categories as $category)
                                <li>
                                    <a href="{{ route('category', $category->slug) }}"><i class="fa fa-angle-right"></i> {{ $category->title }}</a>
                                    <span class="badge pull-right">{{ $category->posts->count()}}</span>
                                </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>

                </aside>
            </div>