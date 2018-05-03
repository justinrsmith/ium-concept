                </div>
            </div>
        </div>
        <footer class="footer text-white mt-4">
            <div class="container-fluid py-3">
                <!-- <div class="row">
                    <div class="col-md-3">
                        <h5>Footer</h5></div>
                    <div class="col-md-3"></div>
                    <div class="col-md-3"></div>
                    <div class="col-md-3"></div>
                </div>
                <div class="row">
                    <div class="col-md-6">I stay at the bottom of the viewport! <span class="small"><br>Unless the page content pushes me further.</span></div>
                    <div class="col-md-3"></div>
                    <div class="col-md-3 text-right small align-self-end">©2017 Brand, Inc.</div>
                </div> -->
            </div>
        </footer>
        <script type="text/html" id="ium-search-template">
            <div>
                <div class="input-group">
                    <input v-model="searchQuery" type="text" class="form-control" placeholder="Search..." aria-label="Search term" aria-describedby="basic-addon2">
                </div>
                <div v-click-outside="hide" v-if="visible" id="search-results" class="col pl-0 mt-1">
                    <ul class="list-group rounded">
                        <li class="list-group-item">
                            <h6 class="ml-3">Some area</h6>
                            <p class="mb-0"><a class="mx-3" href="#">Dapibus ac facilisis in</a></p>
                        </li>
                        <li class="list-group-item">
                            <h6 class="ml-3">Another area</h6>
                            <p class="mb-0"><a class="mx-3" href="#">Dapibus ac facilisis in</a></p>
                            <p class="mb-0"><a class="mx-3" href="#">Dapibus ac facilisis in</a></p>
                            <p class="mb-0"><a class="mx-3" href="#">Dapibus ac facilisis in</a></p>
                        </li>
                    </ul>
                </div>
            </div>
        </script>
        <script type="text/javascript">
            Vue.component('ium-search', {
                template: '#ium-search-template',
                data: function() {
                    return {
                        searchQuery: null,
                        visible: false
                    }
                },
                methods: {
                    show: function() {
                        this.visible = true;
                    },
                    hide: function() {
                        this.visible = false;
                    }
                },
                watch: {
                    searchQuery: function() {
                        if(this.searchQuery.length > 1)
                            this.show()
                        else
                            this.hide()
                    }
                }
            })
            new Vue({ el: '#ium-search-container' })
            new Vue({ el: '#ium-search-container-mobile' })
            new Vue({ el: '#ium-search-container-file-list' })

            // https://jsfiddle.net/70vm3jrd/1/
            // This will hide search results dropdown if user
            // clicks outside of the component
            Vue.directive('click-outside', {
                bind: function (el, binding, vnode) {
                    el.event = function (event) {
                        // here I check that click was outside the el and his childrens
                        if (!(el == event.target || el.contains(event.target))) {
                        // and if it did, call method provided in attribute value
                            vnode.context[binding.expression](event);
                        }
                    };
                    document.body.addEventListener('click', el.event)
                },
                unbind: function (el) {
                    document.body.removeEventListener('click', el.event)
                },
            });
        </script>
    </body>
</html>
<?php wp_footer(); ?>
