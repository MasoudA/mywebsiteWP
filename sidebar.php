<div class="well"> 
    <h4>Recent Posts:</h4>
    <script type="text/javascript">
    (function(d, e) {
        var e = +e || 10,
            a = document.getElementsByTagName("script"),
            a = a[a.length - 1],
            b = document.createElement("div");
        a.parentNode.appendChild(b);
        b.setAttribute("class", "widget");
        b.setAttribute("id", "TumblrRecentPosts");
        a = document.createElement("script");
        //a.src = "http://" + d + "/api/read/json";
        a.onload = function() {
            if (tumblr_api_read) {
                for (var a = tumblr_api_read.posts, c, d = Math.min(a.length, e), f = "<ul class='list-unstyled'>", g = 0; g < d; ++g) c = a[g], f += "<li style='margin-bottom: 10px;'><a href='" + (c["url-with-slug"] || c.url) + "'>" + c["regular-title"] + "</a></li>";
                b.innerHTML = f
            }
        };
        document.body.appendChild(a)
    })("blog.startbootstrap.com", 10); //enter your settings here
    </script>
    <div class="widget" id="TumblrRecentPosts"><ul class="list-unstyled"><li style="margin-bottom: 10px;"><a href="http://blog.startbootstrap.com/post/101273227098/start-bootstrap-templates-now-have-their-own-repo">Start Bootstrap Templates Now Have Their Own Repo</a></li><li style="margin-bottom: 10px;"><a href="http://blog.startbootstrap.com/post/98416037378/new-clean-blog-theme-on-start-bootstrap">New 'Clean Blog' Theme on Start Bootstrap</a></li><li style="margin-bottom: 10px;">
    </div>
    <a href="http://blog.startbootstrap.com">Back to Blog Home</a>
</div>