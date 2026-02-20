<article>
    
    <?php

        if (str_contains($_SERVER['REQUEST_URI'],'business_analysis') == true)
            {                
                echo "<h1>CASE STUDIES</h1>";
                
                echo "<section>";
            
                    echo "<div class='description margin_bottom'>";
                    
                        echo "<p>Here are some examples that showcase what we can do for our clients:</p>";

                    echo "</div>";
            }

        elseif (str_contains($_SERVER['REQUEST_URI'],'case_studies') == true)
            {
                echo "<section>";
                
                    echo "<h2 id='business_analysis'>BUSINESS ANALYSIS</h2>";
            }

    ?> 

        <div>

            <span class="banner">
                <p>
                    Test
                </p>
            </span>
            
            <span class="left">
                
                <img src="/assets/images/other/case_study.webp" alt="Case Study">

                <p>
                    A web tool to improve my client's services AND provide additional customer revenue / engagement
                </p>
            
            </span>

            <span class="right">

                <p>

                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.

                </p>

            </span>

        </div>

    </section>

</article>