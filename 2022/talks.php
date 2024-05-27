<?php
require "common/include.php";
startPage();
includeBanner();
includeMenu();
?>
  
<div class="content">
    <font color=#003366 size=+2.5><b>Keynotes</b></font>
    
<!-- Speakers -->

<br><br>

<div class="row">
    <div class="column-33">
        <img id="currentPhoto" class="img-radius" src="images/keynote/miller.png" onerror="this.onerror=null; 
             this.src='images/keynote/default.png'" alt="Andrew Miller" width="190" height="auto">
    </div>
    <div class="column-66">
        <font color=#003366 size=+2><b>Blockchains and the Future of Private Smart Contracts</b></font><br>
        <font color=#003366 size=+1.5><i>Andrew Miller</i>
        <br> <i>University of Illinois at Urbana-Champaign, USA</i></font><br><br>
        <button class="collapsible-radius">Learn More</button>
        <div class="content1">
            <p> <b>Abstract: </b>It's widely appreciated by now that all cryptocurrencies and 
                        blockchains need some sort of confidentiality mechanism for their most 
                        interesting applications (whether that's sensitive financial data, 
                        supply chain records, healthcare data, etc.). We want the benefits 
                        associated with pool sensitive data and making use of a shared 
                        transaction platform, but without the vulnerability and trust required 
                        that this normally entails. <br><br>
                        
                        Smart contract developers know that they have at their disposal - at 
                        least in principle - an impressive toolbox of cryptography primitives, 
                        including zero knowledge proofs, multiparty computation, and hardware 
                        enclaves. However, it's still difficult to design and build systems 
                        based on these, in part because the software tooling is still so 
                        early. I'll explain a layered design framework that links these 
                        approaches together, and present a few recent research efforts that 
                        present a unified programming framework to offer developers. </p>
                    <p><b>Bio:</b> Andrew Miller is an Assistant Professor at the University of Illinois, 
                        Urbana-Champaign, in Electrical and Computer Engineering and affiliate 
                        in Computer Science, where he directs the Decentralized Systems Lab, 
                        and focuses on research at the intersection of distributed computing, 
                        cryptography, and programming languages. He is also an Associate 
                        Director of the Initiative for Cryptocurrencies and Contracts (IC3), a 
                        board member of the Zcash Foundation, and an advisor of Chainlink Labs. </p>
        </div>
    </div> 
</div>

<div class="rowbreak-big"></div>

<div class="row">
    <div class="column-33">
        <img id="currentPhoto" class="img-radius" src="images/keynote/juels.png" onerror="this.onerror=null; 
             this.src='images/keynote/default.png'" alt="Ari Juels" width="190" height="auto">
    </div>
    <div class="column-66">
        <font color=#003366 size=+2><b>Non-Fungible Tokens (NFTs): How Should the Apes Evolve?</b></font><br>
        <font color=#003366 size=+1.5><i>Ari Juels</i>
        <br> <i>Cornell Tech (Jacobs Institute) and IC3, USA</i></font><br><br>
        <button class="collapsible-radius">Learn More</button>
        <div class="content1">
            <p> <b>Abstract: </b>Over the past year, non-fungible tokens (NFTs) 
                        have leapt to prominence as a technical and social phenomenon. 
                        Popular tokens such as the Bored Ape Yacht Club (BAYC) are 
                        attracting enormous sums of money and spawning whole subcultures. 
                        Current platforms for NFT distribution and management have 
                        endowed NFT marketplaces with attractive features and capabilities, 
                        but have unfortunate drawbacks. For example, in "drops" of 
                        popular NFTs today, it is hard to achieve fairness: Bots 
                        often snap up new offerings and corner the market. 
                        In this talk, I'll propose desirable security features and 
                        functionality for future NFT platforms, discuss resulting 
                        technical challenges, and outline some candidate solutions.  </p>
                    <p><b>Bio:</b> Ari Juels is the Weill Family Foundation and Joan and Sanford I. Weill Professor in the Jacobs Technion-Cornell Institute at Cornell Tech and the Technion and a Computer Science faculty member at Cornell University. He is a Co-Director of the Initiative for CryptoCurrencies and Contracts (IC3). He is also Chief Scientist at Chainlink Labs. <br><br>
                    
                    He was the Chief Scientist of RSA, Director of RSA Laboratories, and a Distinguished Engineer at EMC (now Dell EMC), where he worked until 2013. He received his Ph.D. in computer science from U.C. Berkeley in 1996. <br><br>
                    
                    His recent areas of interest include blockchains, cryptocurrency, and smart contracts, as well as applied cryptography, cloud security, user authentication, and privacy. </p>
        </div>
    </div> 
</div>
<div class="rowbreak-big"></div>

<div class="row">
    <div class="column-33">
        <img id="currentPhoto" class="img-radius" src="images/keynote/gervais.png" onerror="this.onerror=null; 
             this.src='images/keynote/default.png'" alt="Arthur Gervais" width="190" height="auto">
    </div>
    <div class="column-66">
        <font color=#003366 size=+2><b>How Dark is the Forest? On Blockchain Extractable Value and High-Frequency Trading in Decentralized Finance </b></font><br>
        <font color=#003366 size=+1.5><i>Arthur Gervais</i>
        <br> <i>Imperial College London, UK</i></font><br><br>
        <button class="collapsible-radius">Learn More</button>
        <div class="content1">
            <p> <b>Abstract: </b>Permissionless blockchains such as Bitcoin have 
                excelled at financial services. Yet, opportunistic traders extract 
                monetary value from the mesh of decentralized finance (DeFi) smart 
                contracts through so-called blockchain extractable value (BEV). 
                The recent emergence of centralized BEV relayer portrays BEV as a 
                positive additional revenue source. Because BEV, however, was quantitatively 
                shown to deteriorate the blockchain's consensus security, BEV relayers 
                endanger the ledger security by incentivizing rational miners to 
                fork the chain. For example, a rational miner with a 10% hashrate 
                will fork Ethereum if a BEV opportunity exceeds 4x the block reward. <br><br>
                
                In this talk, we quantify the BEV danger by deriving the USD extracted 
                from sandwich attacks, liquidations, and decentralized exchange arbitrage. 
                We estimate that over 32 months, BEV yielded 540.54M USD in profit, 
                divided among 11,289 addresses when capturing 49,691 cryptocurrencies 
                and 60,830 on-chain markets. The highest BEV instance we find amounts 
                to 4.1M USD, 616.6x the Ethereum block reward. Moreover, while the practitioner's 
                community has discussed the existence of generalized trading bots, 
                we are, to our knowledge, the first to provide a concrete algorithm. 
                Our algorithm can replace unconfirmed transactions without the need 
                to understand the victim transactions' underlying logic, which we 
                estimate to have yielded a profit of 57,037.32 ETH (35.37M USD) 
                over 32 months of past blockchain data. <br><br>
                
                Relevant papers: <br>
                - Quantifying Blockchain Extractable Value: How dark is the forest? [to appear at S&P'22] (https://arxiv.org/pdf/2101.05511.pdf) <br>
                - High-Frequency Trading on Decentralized Exchanges [S&P'21] (https://arxiv.org/pdf/2009.14021.pdf) <br>
                - Synthesizing Profitable and Adversarial Blockchain Transactions [S&P'21] (https://arxiv.org/pdf/2103.02228.pdf)   </p>
            <p><b>Bio:</b> Arthur Gervais (www.arthurgervais.com) is a Lecturer 
                (equivalent Assistant Professor) at Imperial College London. He's 
                passionate about information security and worked since 2012 on blockchain 
                related topics, with a recent focus on Decentralized Finance (DeFi). 
                He is co-instructor in the first DeFi MOOC attracting over 3000 
                students in the Fall 2021 (https://defi-learning.org/). The DeFi 
                MOOC will be reinstantiated in the Fall 2022.  </p>
        </div>
    </div> 
</div>
<div class="rowbreak-big"></div>

<div class="row">
    <div class="column-33">
        <img id="currentPhoto" class="img-radius" src="images/keynote/cachin.png" onerror="this.onerror=null; 
             this.src='images/keynote/default.png'" alt="Christian Cachin" width="190" height="auto">
    </div>
    <div class="column-66">
        <font color=#003366 size=+2><b>Blockchain Consensus Protocols </b></font><br>
        <font color=#003366 size=+1.5><i>Christian Cachin</i>
        <br> <i>University of Bern, Switzerland</i></font><br><br>
        <button class="collapsible-radius">Learn More</button>
        <div class="content1">
            <p> <b>Abstract: </b>Although practical Byzantine fault-tolerant (BFT) consensus protocols have 
                been available for two decades, they have never been deployed in production 
                until very recently. The widespread interest in cryptocurrencies and 
                blockchains has changed this. BFT consensus protocols are at the heart of 
                many current blockchain platforms, which run without a central authority. <br><br>
 
                This presentation will explore the foundations of BFT consensus, such as 
                quorum systems, reliable broadcasts, and protocols for storing data.  
                Furthermore, the talk also discusses protocols with asymmetric trust. By 
                letting nodes express their subjective assumptions of whom they trust and 
                by how much, this model bridges between standard BFT consensus and 
                decentralized blockchains. The approach is related to consensus in the 
                Ripple and Stellar blockchains, which have introduced similar ideas but 
                only with a heuristic approach. 
                
                
                
            <p><b>Bio:</b> Christian Cachin is a professor of computer science at the University of 
                Bern (Switzerland), where he has been leading the Cryptology and Data 
                Security Research Group since 2019. Prior to that he worked for IBM 
                Research - Zurich during more than 20 years. He has held visiting 
                positions at MIT and at EPFL and has taught at several universities during 
                his career in industrial research. He graduated with a Ph.D. in Computer 
                Science from ETH Zurich in 1997. He is an ACM Fellow, an IEEE Fellow, 
                recipient of multiple IBM Outstanding Technical Achievement Awards, and has 
                also served as the President of the International Association for 
                Cryptologic Research (IACR) from 2014-2019. <br><br>
 
                With a background in cryptography, he is interested in all aspects of 
                security in distributed systems and especially in cryptographic protocols, 
                consistency, consensus, blockchains, and cloud-computing security. He 
                has developed many cryptographic protocols, particularly for achieving 
                consensus and for executing distributed cryptographic operations over the 
                Internet. In the area of cloud computing, he has contributed to standards 
                in storage security and developed protocols for key management. He has 
                co-authored a textbook on distributed computing titled "Introduction to 
                Reliable and Secure Distributed Programming". While at IBM Research he 
                made essential contributions to the development of Hyperledger Fabric, a 
                blockchain platform aimed business use.   </p>
        </div>
    </div> 
</div>
<div class="rowbreak-big"></div>


<div class="row">
    <div class="column-33">
        <img id="currentPhoto" class="img-radius" src="images/keynote/shah.png" onerror="this.onerror=null; 
             this.src='images/keynote/default.png'" alt="Dinesh Shah" width="190" height="auto">
    </div>
    <div class="column-66">
        <font color=#003366 size=+2><b>CBDC Developments and Hard Problems </b></font><br>
        <font color=#003366 size=+1.5><i>Dinesh Shah</i>
        <br> <i>Director of Fintech Research, Bank of Canada, Canada</i></font><br><br>
        <button class="collapsible-radius">Learn More</button>
        <div class="content1">
            <p> <b>Abstract: </b>Consideration of CBDC - policy, business model and technology - have increased in tempo around the world, and some countries have actually issued CBDC. We will present the broad set of developments around the world and in Canada around CBDC. While progress has been made, many open questions and hard problems remain. We will speak to these and some of the thinking around solutions. </p>
                
                
                
            <p><b>Bio:</b> As Director Fintech Research, Dinesh leads the technical development of a central bank digital currency in support of the Bank of Canada's policy to build this capability as a contingency measure. He also leads the technology aspect of the research agenda in fintech, most notable project Jasper, which supports economic and financial system research into the implications of blockchain technologies to the core mandates of the Bank. <br><br>
            
                Dinesh joined the Bank of Canada in 2009 as an Enterprise Architect. Before joining the Bank, has been a co-founder and architect at various start-ups. He spent 8 years as a developer of various fixed-income trading and risk management systems at financial institutions in London. In addition, he provided expertise on the application of leading-edge technologies to securities trading and clearing firms.  </p>
        </div>
    </div> 
</div>
<div class="rowbreak-big"></div>


<!--<div class="row">-->
<!--    <div class="column-33">-->
<!--        <img id="currentPhoto" class="img-radius" src="images/keynote/felten.jpeg" onerror="this.onerror=null; -->
<!--             this.src='images/keynote/default.png'" alt="Edward W. Felten" width="190" height="auto">-->
<!--    </div>-->
<!--    <div class="column-66">-->
<!--        <font color=#003366 size=+2><b>To come </b></font><br>-->
<!--        <font color=#003366 size=+1.5><i>Edward W. Felten</i>-->
<!--        <br> <i>Director, Center for Information Technology Policy, Princeton University, USA</i></font><br><br>-->
<!--        <button class="collapsible-radius">Learn More</button>-->
<!--        <div class="content1">-->
<!--            <p> <b>Abstract: </b>To come</p>-->
                
                
                
<!--            <p><b>Bio:</b> To come </p>-->
<!--        </div>-->
<!--    </div> -->
<!--</div>-->
<!--<div class="rowbreak-big"></div>-->


<div class="row">
    <div class="column-33">
        <img id="currentPhoto" class="img-radius" src="images/keynote/goodell.png" onerror="this.onerror=null; 
             this.src='images/keynote/default.png'" alt="Geoffrey Goodell" width="190" height="auto">
    </div>
    <div class="column-66">
        <font color=#003366 size=+2><b>The Future of Privately-Held Money</b></font><br>
        <font color=#003366 size=+1.5><i>Geoffrey Goodell</i>
        <br> <i>University College London, UK</i></font><br><br>
        <button class="collapsible-radius">Learn More</button>
        <div class="content1">
            <p> <b>Abstract: </b>Electronic retail payment mechanisms, especially e-commerce and card payments 
                at the point of sale, have increasingly replaced cash in many developed 
                countries.  As a result, societies are losing a critical public retail payment 
                option, and retail consumers are losing important rights associated with using 
                cash.  We offer a scalable architecture for electronic retail payments via 
                central bank digital currency and offer a solution to the perceived conflict 
                between robust regulatory oversight and consumer affordances such as privacy 
                and control.  Our architecture combines existing work in payment systems and 
                digital currency with a new approach to digital asset design for managing 
                unforgeable, stateful, and oblivious assets without relying on either a central 
                authority or a monolithic consensus system.  Regulated financial institutions 
                have a role in every transaction, and the consumer affordances are achieved 
                through the use of non-custodial wallets that unlink the sender from the 
                recipient in the transaction channel.  This approach is fully compatible with 
                the existing two-tiered banking system and can complement and extend the roles 
                of existing money services businesses and asset custodians.  We also show that 
                it is possible to introduce regulation of digital currency transactions 
                involving non-custodial wallets that unconditionally protect the privacy of 
                end-users.   </p>
                
                
                
            <p><b>Bio:</b> Dr Geoffrey Goodell is a Lecturer in Financial Computing at University College 
                        London.  He is an associate of the UCL Centre for Blockchain Technologies and 
                        an associate of the Systemic Risk Centre of the London School of Economics.  He 
                        is Convenor of two ISO working groups on distributed ledger technologies 
                        and an ISO advisory group on digital currency.  <br><br>
                        
                        Dr Goodell has roughly a decade of experience in the financial industry as a 
                        strategist and portfolio manager, having served most recently as Partner and 
                        Chief Investment Officer of a boutique asset management firm based in Boston, 
                        where he led the design, implementation, and management of investment 
                        strategies in systematic macro trading and statistical arbitrage.  Previously, 
                        he was an associate in the corporate credit and structured products groups at 
                        Goldman Sachs in New York. <br><br>
                        
                        Dr Goodell's research contributes to knowledge at the interface between 
                        computer science, finance, and public policy in areas related to digital 
                        currency, digital payment systems, and regulation.            
            </p>
        </div>
    </div> 
</div>
<div class="rowbreak-big"></div>



<div class="row">
    <div class="column-33">
        <img id="currentPhoto" class="img-radius" src="images/keynote/teutsch.png" onerror="this.onerror=null; 
             this.src='images/keynote/default.png'" alt="Jason Teutsch" width="190" height="auto">
    </div>
    <div class="column-66">
        <font color=#003366 size=+2><b>Nec pluribus impar: An interface paradox</b></font><br>
        <font color=#003366 size=+1.5><i>Jason Teutsch</i>
        <br> <i>Truebit</i></font><br><br>
        <button class="collapsible-radius">Learn More</button>
        <div class="content1">
            <p> <b>Abstract: </b>Consumers of downstream information lack a homogeneous perspective on upstream processes.  Despite formal guarantees of universal consensus, blockchain databases offer no better visibility.  As a simple example, an observer may witness a different list of confirmed Ethereum transactions depending on whether she scrapes via TrueBlocks or Etherscan.  We survey instances of this prevalent phenomenon and observe damaging consequences in complex, multi-party applications.</p>
                
                
                
            <p><b>Bio:</b> Jason Teutsch is a mathematician and computer scientist whose research background includes distributed systems security, game theory, and algorithmic randomness. He has held postdoctoral positions at National University of Singapore, Penn State, and Universit&auml;t Heidelberg, research positions at think tanks RAND and IDA, and multiple Fulbright fellowships. In his current mission, Jason focuses on distributed trust and verification. </p>
        </div>
    </div> 
</div>
<div class="rowbreak-big"></div>

<div class="row">
    <div class="column-33">
        <img id="currentPhoto" class="img-radius" src="images/keynote/yung.png" onerror="this.onerror=null; 
             this.src='images/keynote/default.png'" alt="Moti Yung" width="190" height="auto">
    </div>
    <div class="column-66">
        <font color=#003366 size=+2><b>"Crypto Means Cryptography, Not Cryptocurrency:" A Misplaced Controversy.</b></font><br>
        <font color=#003366 size=+1.5><i>Moti Yung</i>
        <br> <i>Columbia University and Google, USA</i></font><br><br>
        <button class="collapsible-radius">Learn More</button>
        <div class="content1">
            <p> <b>Abstract: </b>Cryptographers have been complaining that in the popular press and the media "Cryptocurrency" has been called "Crypto" while among cryptographers "Crypto" is a shorthand for "Cryptography." While there is an issue of overloading a shorthand term for more than a single notion, the goal of this talk is to claim that the controversy is not a serious issue.  In fact, while cryptocurrency development has suffered at times some cryptographic implementation issues and the area is evolving without the typical rigor of cryptography, cryptocurrency is in fact a subarea of cryptography (and distributed computing). The origin of bitcoin and blockchain is in cryptography and certainly no one refutes that the area is based on cryptography. Furthermore, cryptocurrency caused various interesting notions developed in cryptography to be useful and evolve into actual usage; and finally, cryptocurrencies and blockchain research also imply new cryptographic developments. Therefore, it is much more effective to endorse cryptocurrency as a legitimate, striving, and useful subarea of cryptography. It is much more effective for cryptographers to engage in cryptocurrency and blockchain research, then starting a mini "culture war" against the area! The talk will visit these issues. </p>
                
                
                
            <p><b>Bio: </b>Moti Yung is a Security and Privacy Research Scientist with Google. He got his PhD from Columbia University in 1988. Previously, he was with IBM Research, Certco, RSA Laboratories, and Snap. He is also an adjunct senior research faculty at Columbia, where he has co-advised and worked with PhD students.  Yung is a fellow of the IEEE, the Association for Computing Machinery (ACM), the International Association for Cryptologic Research (IACR), and the European Association for Theoretical Computer Science (EATCS). In 2010 he gave the IACR Distinguished Lecture. He is the recipient of the 2014 ACM’s SIGSAC Outstanding Innovation award, the 2014 ESORICS (European Symposium on Research in Computer Security) Outstanding Research award, an IBM Outstanding Innovation award, a Google OC award, and a Google founders’ award. In 2018 he received the IEEE-CS W. Wallace McDowell Award. In 2020 he received the test-of-time award for a paper predicting ransomware co-authored in 1996 in IEEE’s Symp. on Security and Privacy; also in 2020 he received the IACR’s PKC conference test-of-time award for a paper he co-authored in 1998. In 2021 he received the IEEE-CS Computer Pioneer Award. </p>
        </div>
    </div> 
</div>
<div class="rowbreak-big"></div>

<div class="row">
    <div class="column-33">
        <img id="currentPhoto" class="img-radius" src="images/keynote/charles.png" onerror="this.onerror=null; 
             this.src='images/keynote/default.png'" alt="Wendy Charles" width="190" height="auto">
    </div>
    <div class="column-66">
        <font color=#003366 size=+2><b>The Need for Blockchain-based Dynamic Consent in Healthcare  </b></font><br>
        <font color=#003366 size=+1.5><i>Wendy Charles</i>
        <br> <i>Chief Scientific Officer, BurstIQ, USA</i></font><br><br>
        <button class="collapsible-radius">Learn More</button>
        <div class="content1">
            <p> <b>Abstract: </b>Patients are offered an increasing number of methods 
                for collecting and managing healthcare information using digital 
                technologies. These digital methods generate tremendous opportunities 
                to monitor patient care but also perform research and monetize data. 
                To provide informed consent for health data uses outside of traditional 
                healthcare, patients are increasingly interested in dynamic consent: 
                the ability to manage consent and preferences over time. Organizations' 
                hesitations about offering dynamic consent included administrative 
                burdens and technological costs. Both of these burdens are alleviated 
                by capabilities offered by blockchain-based technologies. This presentation 
                presents emerging benefits, obstacles, and ethical principles about 
                blockchain-based dynamic consent methods. For the areas where digital 
                informed consent creates uncertainties, ethical, user-design, and 
                security recommendations will be provided. </p>
                
                
                
            <p><b>Bio:</b> Dr. Wendy Charles has been involved in clinical trials 
                from every perspective for 30 years, with a strong background in 
                operations and regulatory compliance. She currently serves as Chief 
                Scientific Officer for BurstIQ, a healthcare information technology 
                company specializing in blockchain and AI. She is also a lecturer 
                faculty member in the Health Administration program at the University 
                of Colorado, Denver. Dr. Charles augments her blockchain healthcare 
                experience by serving on the EU Blockchain Observatory and Forum 
                Expert Panel, HIMSS Blockchain Task Force, Government Blockchain 
                Association healthcare group, and IEEE Blockchain working groups. 
                She is also involved as an assistant editor and reviewer for academic 
                journals. Dr. Charles obtained her Ph.D. in Clinical Science with 
                a specialty in Health Information Technology from the University 
                of Colorado, Anschutz Medical Campus. She is certified as an IRB 
                Professional, Clinical Research Professional, and Blockchain Professional.  </p>
        </div>
    </div> 
</div>


<script>
var coll = document.getElementsByClassName("collapsible-radius");
var i;

for (i = 0; i < coll.length; i++) {
  coll[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var content = this.nextElementSibling;
    if (content.style.maxHeight){
      content.style.maxHeight = null;
    } else {
      content.style.maxHeight = content.scrollHeight + "px";
    } 
  });
}

</script>

</div>

<?php
includeFooter();
?>
</div>
</body>
</html>
