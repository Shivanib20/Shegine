<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $message = htmlspecialchars($_POST['msg']);
    
    // Define predefined replies
    $replies = [
        "cleanliness" => "Change your sanitary napkin every 4-6 hours. Wash yourself properly. Don't use soaps or vagina hygiene products. Discard the sanitary napkin properly. Stick to one method of sanitation.",
        "genital sores" => "A few different things can cause sores around your vagina. It could be something like a yeast infection or an allergic reaction to the pads or tampons you are using. Or it could be an STD, like herpes. But there is no way to know for sure what's going on unless you see a nurse or doctor. Anytime you have sores, blisters, or pain in your vulva or vagina, see a nurse or doctor.",
        "sanitary pad" => "1. Good Absorbency: One of the most important elements of a good sanitary pad is the ability to absorb a large volume of blood in a short span of time. 2. Length and Flow: Blood discharge is usually heavier at the start of your period, so it is essential to choose a pad that can quickly and effectively absorb your flow. 3. Material Comfort: Sanitary pads are either made of cotton or plastic netted. Everyone’s skin is different, thus the comfort levels with certain materials differ as well.",
        "skincare" => "1. Wash your face enough. 2. Avoid makeup. 3. Hydrate your skin. 4. Watch what you eat. 5. Manage oiliness. 6. Try a massage.",
        "alternatives" => "1. Menstrual cup. 2. Cloth pads. 3. Period panties. 4. Menstrual sponges. 5. Menstrual disc."
    ];
    
    // Simple keyword matching to select a reply
    $found = false;
    foreach ($replies as $keyword => $reply) {
        if (stripos($message, $keyword) !== false) {
            echo "<div class='response'><p>" . $reply . "</p></div>";
            $found = true;
            break;
        }
    }
    
    // Default response if no keywords match
    if (!$found) {
        echo "<div class='response'><p>Sorry, we couldn't find an answer for your message.</p></div>";
    }
}
?>
