import LogoIMG from '/images/aff-logo.svg'
import './header.css';
import { Link } from 'react-router-dom';
import Container from 'react-bootstrap/Container';
import Menu from './menu/menu';
import SearchBar from './searchbar/searcjbar';

export default function navbar() {
    return (
        <div className='header'>
            <svg width="1440" height="127" viewBox="0 0 1440 127" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path opacity="0.3" d="M0 76.0672L41 98.5C41 98.5 104.5 128.746 200.5 126C296.5 123.447 480 91.4806 576 76.0672C672 60.6537 768 60.6537 864 70.9132C960 81.3655 1104 117.914 1200 118.058C1296 117.914 1392 97.6838 1440 87.2315V60.6537V-1.00002H1392C1344 -1.00002 1248 -1.00002 1152 -1.00002C1056 -1.00002 960 -1.00002 864 -1.00002C768 -1.00002 672 -1.00002 576 -1.00002C480 -1.00002 384 -1.00002 288 -1.00002C192 -1.00002 48 -1.00002 48 -1.00002H0V76.0672Z" fill="#00A9AE" />
            </svg>



            <Container className='heaeder-section'>
                <div className='logo-section'>
                    <Link to="/"> <img src={LogoIMG} /></Link>
                </div>
                <div className='menu-section'>
                    <nav>
                        <ul>
                           

                            <li><Link to="/az">Az</Link></li>
                            <hr className='horizontal-divider'/>
                            <li><Link to="/ru">Ru</Link></li>
                            
                            <Menu />
                            <SearchBar />
                        </ul>
                        
                    </nav>
                </div>
            </Container>
            
        
        </div>
    )
}
