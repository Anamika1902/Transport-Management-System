<footer class="footer">
    <div class="footer-icons">
      <a href="#" class="footer-icon"><i class="fas fa-phone"></i></a>
      <a href="#" class="footer-icon"><i class="fas fa-envelope"></i></a>
      <a href="#" class="footer-icon"><i class="fas fa-map-marker-alt"></i></a>
      <a href="#" class="footer-icon fab fa-facebook"></a>
      <a href="#" class="footer-icon fab fa-twitter"></a>
      <a href="#" class="footer-icon fab fa-instagram"></a>
    </div>
    <p class="footer-text">© 2023 Sachin. All rights reserved.</p>
  </footer>


<style>
.footer {
  background-color: var(--dark);
  color: #ffffff;
  padding: 20px;
  text-align: center;
  animation: slide-up 0.8s ease-in-out;
}

.footer-icons {
  display: flex;
  justify-content: center;
  align-items: center;
  margin-bottom: 10px;
}

.footer-icon {
  font-size: 32px;
  color: var(--light);
  margin: 0 15px;
  transition: color 0.3s, transform 0.3s;
  animation: bounce 1s infinite;
}

.footer-icon:hover {
  color: var(--primary);
  transform: scale(1.1);
}

.footer-text {
  font-size: 14px;
  opacity: 0.8;
}

@keyframes slide-up {
  from {
    transform: translateY(20px);
    opacity: 0;
  }
  to {
    transform: translateY(0);
    opacity: 1;
  }
}

@keyframes bounce {
  0%,
  100% {
    transform: translateY(0);
  }
  50% {
    transform: translateY(-10px);
  }
}
</style>

